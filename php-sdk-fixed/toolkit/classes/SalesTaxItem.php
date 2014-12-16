<?php

class SalesTaxItem extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $itemId;
	/**
	 * @access public
	 * @var string
	 */
	public $displayName;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxAgency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $saleAccount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveFrom;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validUntil;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var boolean
	 */
	public $eccode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $reverseCharge;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $service;
	/**
	 * @access public
	 * @var boolean
	 */
	public $exempt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeFromTaxReports;
	/**
	 * @access public
	 * @var SalesTaxItemAvailable
	 */
	public $available;
	/**
	 * @access public
	 * @var boolean
	 */
	public $export;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxAccount;
	/**
	 * @access public
	 * @var string
	 */
	public $county;
	/**
	 * @access public
	 * @var string
	 */
	public $city;
	/**
	 * @access public
	 * @var string
	 */
	public $state;
	/**
	 * @access public
	 * @var string
	 */
	public $zip;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexusCountry;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"itemId" => "string",
		"displayName" => "string",
		"description" => "string",
		"rate" => "string",
		"taxType" => "RecordRef",
		"taxAgency" => "RecordRef",
		"purchaseAccount" => "RecordRef",
		"saleAccount" => "RecordRef",
		"isInactive" => "boolean",
		"effectiveFrom" => "dateTime",
		"validUntil" => "dateTime",
		"subsidiaryList" => "RecordRefList",
		"includeChildren" => "boolean",
		"eccode" => "boolean",
		"reverseCharge" => "boolean",
		"parent" => "RecordRef",
		"service" => "boolean",
		"exempt" => "boolean",
		"isDefault" => "boolean",
		"excludeFromTaxReports" => "boolean",
		"available" => "SalesTaxItemAvailable",
		"export" => "boolean",
		"taxAccount" => "RecordRef",
		"county" => "string",
		"city" => "string",
		"state" => "string",
		"zip" => "string",
		"nexusCountry" => "RecordRef",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
