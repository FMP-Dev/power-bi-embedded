<?php


namespace PowerBiEmbedded\Services;


use PowerBiEmbedded\Responses\DeleteGroupResponse;
use PowerBiEmbedded\Responses\GetGroupResponse;
use PowerBiEmbedded\Responses\PostGroupResponse;


/**
 * Class Dataset.
 *
 * @package PowerBiEmbedded\Services
 */
class Group extends Service
{

	/**
	 * Base service url.
	 *
	 * @var string
	 */
	protected $base_url = 'https://api.powerbi.com/v1.0/myorg/groups/';


	/**
	 * Create a new group.
	 *
	 * @see https://docs.microsoft.com/en-gb/rest/api/power-bi/groups/creategroup
	 *
	 * @param string $name
	 * @param bool $use_workspace_v2
	 * @return PostGroupResponse
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function postGroup(string $name, bool $use_workspace_v2)
	{
		$endpoint = $this->base_url . ($use_workspace_v2 ? '?workspaceV2=true' : '');

		return new PostGroupResponse($this->client->request('POST', $endpoint, ['name' => $name]));
	}


	/**
	 * Delete group by id.
	 *
	 * @see https://docs.microsoft.com/en-gb/rest/api/power-bi/groups/deletegroup
	 *
	 * @param string $id
	 * @return DeleteGroupResponse
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function deleteGroupById(string $id)
	{
		$endpoint = $this->base_url . $id;

		return new DeleteGroupResponse($this->client->request('DELETE', $endpoint));
	}


	/**
	 * Get group list.
	 *
	 * @see https://docs.microsoft.com/en-gb/rest/api/power-bi/groups/getgroups
	 *
	 * @return GetGroupResponse
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getGroups()
	{
		return new GetGroupResponse($this->client->request('GET', $this->base_url));
	}
}
