<?php

namespace PowerBiEmbedded\Tests;

use PowerBiEmbedded\Client;
use PHPUnit\Framework\TestCase;


/**
 * Class PowerBITest.
 *
 * @package PowerBiEmbedded\Tests
 */
abstract class PowerBITest extends TestCase
{

	/**
	 * Environment variable that contains the token
	 */
	const TOKEN_ENV_VAR = 'POWERBI_AUTH_TOKEN';


	/**
	 * PowerBI client instance.
	 *
	 * @var Client
	 */
	protected static $client;


	/**
	 * Execute before all tests.
	 *
	 * @throws \Exception
	 */
	public static function setUpBeforeClass() : void
	{

		if (!$token = getenv(self::TOKEN_ENV_VAR))
			throw new \Exception('Please provide the AUTH token into the environment variable ' . self::TOKEN_ENV_VAR);

		static::$client = new Client($token);
	}

}
