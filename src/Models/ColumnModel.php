<?php

namespace PowerBiEmbedded\Models;


use PowerBiEmbedded\Enums\DatatypesEnum;


/**
 * Class Column.
 *
 * @see https://docs.microsoft.com/en-gb/rest/api/power-bi/pushdatasets/datasets_postdataset#column
 *
 * @package PowerBiEmbedded\Models
 */
class ColumnModel extends Model
{

	/**
	 * The column name.
	 *
	 * @var string
	 */
	public $name = '';


	/**
	 * The column data type.
	 *
	 * @var string
	 */
	public $dataType = DatatypesEnum::STRING;

}
