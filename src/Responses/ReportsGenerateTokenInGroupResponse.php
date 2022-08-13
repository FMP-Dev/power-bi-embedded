<?php

namespace PowerBiEmbedded\Responses;


/**
 * Class ReportsGenerateTokenInGroupResponse.
 *
 * @package PowerBiEmbedded\Responses
 */
class ReportsGenerateTokenInGroupResponse extends Response
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
		200 => 'ok'
	];

}
