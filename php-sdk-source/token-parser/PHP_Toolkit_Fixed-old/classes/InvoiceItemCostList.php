<?php

class InvoiceItemCostList {
	/**
	 * @access public
	 * @var InvoiceItemCost[]
	 */
	public $itemCost;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemCost" => "InvoiceItemCost[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
