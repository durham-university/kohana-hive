<?php defined('SYSPATH') or die('No direct script access.');

class Hive_Field_Integer extends Hive_Field {

	public function value($value)
	{
		if ( ! $value)
		{
			if ($this->null)
			{
				return NULL;
			}

			$value = $this->default;
		}

		return (int) $value;
	}

} // End Hive_Field_Integer
