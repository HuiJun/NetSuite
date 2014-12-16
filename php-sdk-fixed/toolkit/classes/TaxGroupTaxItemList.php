<?php

class TaxGroupTaxItemList {
	/**
	 * @access public
	 * @var TaxGroupTaxItem[]
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"taxItem" => "TaxGroupTaxItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
