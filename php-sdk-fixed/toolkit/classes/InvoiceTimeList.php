<?php

class InvoiceTimeList {
	/**
	 * @access public
	 * @var InvoiceTime[]
	 */
	public $time;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"time" => "InvoiceTime[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
