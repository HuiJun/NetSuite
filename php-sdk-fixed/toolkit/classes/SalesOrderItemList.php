<?php

class SalesOrderItemList {
	/**
	 * @access public
	 * @var SalesOrderItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "SalesOrderItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
