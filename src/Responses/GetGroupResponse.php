<?php

namespace PowerBiEmbedded\Responses;


/**
 * Class GetGroupResponse.
 *
 * @package PowerBiEmbedded\Responses
 */
class GetGroupResponse extends Response
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
