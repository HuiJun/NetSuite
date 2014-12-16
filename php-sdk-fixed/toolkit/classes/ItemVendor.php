<?php

class ItemVendor {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vendor;
	/**
	 * @access public
	 * @var string
	 */
	public $vendorCode;
	/**
	 * @access public
	 * @var string
	 */
	public $vendorCurrencyName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vendorCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $purchasePrice;
	/**
	 * @access public
	 * @var boolean
	 */
	public $preferredVendor;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $schedule;
	/**
	 * @access public
	 * @var string
	 */
	public $subsidiary;

	static $paramtypesmap = array(
		"vendor" => "RecordRef",
		"vendorCode" => "string",
		"vendorCurrencyName" => "string",
		"vendorCurrency" => "RecordRef",
		"purchasePrice" => "float",
		"preferredVendor" => "boolean",
		"schedule" => "RecordRef",
		"subsidiary" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
