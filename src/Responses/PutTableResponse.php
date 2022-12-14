<?php

namespace PowerBiEmbedded\Responses;


/**
 * Class PutTableResponse.
 *
 * @package PowerBiEmbedded\Responses
 */
class PutTableResponse extends Response
{

	/**
	 * Indicates if response should have body.
	 *
	 * @var bool
	 */
	protected $has_body = true;


	/**
	 * Valid status.
	 *
	 * @var array
	 */
	protected $valid_status =
	[
		200 => 'ok',
	];

}
