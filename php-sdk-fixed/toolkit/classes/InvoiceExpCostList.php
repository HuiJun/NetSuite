<?php

class InvoiceExpCostList {
	/**
	 * @access public
	 * @var InvoiceExpCost[]
	 */
	public $expCost;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"expCost" => "InvoiceExpCost[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
