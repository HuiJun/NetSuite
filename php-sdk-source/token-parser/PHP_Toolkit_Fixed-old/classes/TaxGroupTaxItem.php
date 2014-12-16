<?php

class TaxGroupTaxItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxName;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $basis;
	/**
	 * @access public
	 * @var string
	 */
	public $taxType;

	static $paramtypesmap = array(
		"taxName" => "RecordRef",
		"rate" => "float",
		"basis" => "float",
		"taxType" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
