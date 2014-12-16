<?php

class RateList {
	/**
	 * @access public
	 * @var Rate[]
	 */
	public $rate;

	static $paramtypesmap = array(
		"rate" => "Rate[]",
	);
    public static function create()
    {
        return new static();
    }
}
