<?php

namespace PowerBiEmbedded\Models;


/**
 * Class Measure.
 *
 * @see https://docs.microsoft.com/en-gb/rest/api/power-bi/pushdatasets/datasets_postdataset#measure
 *
 * @package PowerBiEmbedded\Models
 */
class MeasureModel extends Model
{

	/**
	 * A valid DAX expression.
	 *
	 * @var string
	 */
	public $expression = '';


	/**
	 * The measure name.
	 *
	 * @var string
	 */
	public $name = '';
}
