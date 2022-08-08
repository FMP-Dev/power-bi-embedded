<?php

namespace Services;


use PowerBiEmbedded\Enums\DatasetModeEnum;
use PowerBiEmbedded\Enums\DatatypesEnum;
use PowerBiEmbedded\Models\ColumnModel;
use PowerBiEmbedded\Models\DatasetModel;
use PowerBiEmbedded\Models\TableModel;
use PowerBiEmbedded\Services\Dataset;
use PowerBiEmbedded\Services\Group;
use PowerBiEmbedded\Tests\PowerBITest;


/**
 * Class GroupTest.
 *
 * @package Services
 */
final class GroupTest extends PowerBITest
{

	/**
	 * Default test group.
	 *
	 * @var string
	 */
	protected static $testgroup = 'Test Group ';


	/**
	 * Group Id.
	 *
	 * @var null|string
	 */
	protected static $group_id = null;


	/**
	 * Test group creation.
	 *
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function testCreateGroup()
	{
		static::$testgroup .= uniqid();

		$group = new Group(static::$client);

		$response = $group->postGroup(static::$testgroup, false);

		$this->assertTrue($response->isOk());

		static::$group_id = $response->response()->id;
	}


	/**
	 * Test that created group exists.
	 *
	 * @depends testCreateGroup
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function testGetGroup()
	{
		$group = new Group(static::$client);

		$response = $group->getGroups();

		$this->assertTrue($response->isOk());

		$group = array_filter($response->response(true)['value'], function ($group) {
			return $group['name'] === static::$testgroup && $group['id'] === static::$group_id;
		});

		$this->assertCount(1, $group);
	}


	/**
	 * Test dataset creation in a group.
	 *
	 * @depends testCreateGroup
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function testDatasetInGroup()
	{
		$dataset_name = 'test_' . uniqid();

		$dataset 			  		 = new DatasetModel();
		$dataset->name 		  		 = $dataset_name;
		$dataset->defaultMode 		 = DatasetModeEnum::PUSH;
		$dataset->tables 	  		 = [new TableModel()];
		$dataset->tables[0]->name 	 = 'mytable_in_group';
		$dataset->tables[0]->columns = [new ColumnModel(['name' => 'field', 'dataType' => DatatypesEnum::STRING])];

		$dataset_client = new Dataset(static::$client);

		$response = $dataset_client->postDatasetInGroup($dataset, static::$group_id);

		$this->assertTrue($response->isOk());
		$this->assertArrayHasKey('id', $response->response(true));
	}


	/**
	 * Test that group is deleted.
	 *
	 * @depends testDatasetInGroup
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function testDeleteGroup()
	{
		$reponse = (new Group(static::$client))->deleteGroupById(static::$group_id);

		$this->assertTrue($reponse->isOk());
	}


}
