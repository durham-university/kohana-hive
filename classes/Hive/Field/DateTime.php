<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Hive is an intelligent modeling system for Kohana.
 *
 * @package    Hive
 * @category   Field
 * @author     Woody Gilk <woody@wingsc.com>
 * @copyright  (c) 2010 Woody Gilk
 * @license    MIT
 */
class Hive_Field_DateTime extends Hive_Field_String {

	/**
	 * @var  boolean  set the value to "now" on creation?
	 */
	public $auto_now_create = FALSE;

	/**
	 * @var  boolean  set the value to "now" on update?
	 */
	public $auto_now_update = FALSE;

	/**
	 * @var  string  date format for displaying
	 */
	public $format = 'd/m/Y H:i';

	public $null = TRUE;

	public function value($value)
	{
		if ($value)
		{
			$value = date('Y-m-d H:i:s', strtotime($value));
		}
		else
		{
			if ($this->null)
			{
				return null;
			}
			$value = date($this->format, strtotime($value));
		}

		return parent::value($value);
	}
} // End Hive_Field_DateTime

