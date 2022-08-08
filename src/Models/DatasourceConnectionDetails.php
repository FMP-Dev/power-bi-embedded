<?php

namespace PowerBiEmbedded\Models;


/**
 * Class DatasourceConnectionDetails.
 *
 * @see https://docs.microsoft.com/en-gb/rest/api/power-bi/pushdatasets/datasets_postdataset#datasourceconnectiondetails
 *
 * @package PowerBiEmbedded\Models
 */
class DatasourceConnectionDetails extends Model
{

	/**
	 * The connection database.
	 *
	 * @var string
	 */
	public $database = '';


	/**
	 * The connection server.
	 *
	 * @var string
	 */
	public $server = '';


	/**
	 * The connection url.
	 *
	 * @var string
	 */
	public $url = '';

}
