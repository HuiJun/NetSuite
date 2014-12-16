<?php

class TransactionShipGroup {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isFulfilled;
	/**
	 * @access public
	 * @var float
	 */
	public $weight;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $sourceAddressRef;
	/**
	 * @access public
	 * @var string
	 */
	public $sourceAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $destinationAddressRef;
	/**
	 * @access public
	 * @var string
	 */
	public $destinationAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shippingMethodRef;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isHandlingTaxable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $handlingTaxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $handlingTaxRate;
	/**
	 * @access public
	 * @var string
	 */
	public $handlingTax2Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingRate;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingTaxAmt;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingTax2Amt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isShippingTaxable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shippingTaxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingTaxRate;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingTax2Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingRate;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingTaxAmt;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingTax2Amt;

	static $paramtypesmap = array(
		"id" => "integer",
		"isFulfilled" => "boolean",
		"weight" => "float",
		"sourceAddressRef" => "RecordRef",
		"sourceAddress" => "string",
		"destinationAddressRef" => "RecordRef",
		"destinationAddress" => "string",
		"shippingMethodRef" => "RecordRef",
		"shippingMethod" => "string",
		"isHandlingTaxable" => "boolean",
		"handlingTaxCode" => "RecordRef",
		"handlingTaxRate" => "string",
		"handlingTax2Rate" => "string",
		"handlingRate" => "float",
		"handlingTaxAmt" => "float",
		"handlingTax2Amt" => "float",
		"isShippingTaxable" => "boolean",
		"shippingTaxCode" => "RecordRef",
		"shippingTaxRate" => "string",
		"shippingTax2Rate" => "string",
		"shippingRate" => "float",
		"shippingTaxAmt" => "float",
		"shippingTax2Amt" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
