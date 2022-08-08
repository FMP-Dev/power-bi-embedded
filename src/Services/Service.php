<?php

namespace PowerBiEmbedded\Services;


use PowerBiEmbedded\Client;


/**
 * Class Service.
 *
 * @package PowerBiEmbedded\Services
 */
abstract class Service
{


	/**
	 * The SDK client
	 *
	 * @var Client
	 */
	protected $client;


	/**
	 * Service constructor.
	 *
	 * @param Client $client
	 */
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

}
