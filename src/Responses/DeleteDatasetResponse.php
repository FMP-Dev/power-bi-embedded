<?php

namespace PowerBiEmbedded\Responses;


/**
 * Class DeleteDatasetResponse.
 *
 * @package PowerBiEmbedded\Responses
 */
class DeleteDatasetResponse extends Response
{
	/**
	 * Indicates if response should have body.
	 *
	 * @var bool
	 */
	protected $has_body = false;


	/**
	 * Valid status.
	 *
	 * @var array
	 */
	protected $valid_status =
	[
		200 => 'ok'
	];

}
