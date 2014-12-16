<?php

class InvoiceItemList {
	/**
	 * @access public
	 * @var InvoiceItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "InvoiceItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
