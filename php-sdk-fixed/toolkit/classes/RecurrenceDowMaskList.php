<?php

class RecurrenceDowMaskList {
	/**
	 * @access public
	 * @var RecurrenceDow
	 */
	public $recurrenceDowMask;

	static $paramtypesmap = array(
		"recurrenceDowMask" => "RecurrenceDow",
	);
    public static function create()
    {
        return new static();
    }
}
