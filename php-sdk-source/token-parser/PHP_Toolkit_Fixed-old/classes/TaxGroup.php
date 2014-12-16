<?php

class TaxGroup extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $itemId;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $state;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxitem1;
	/**
	 * @access public
	 * @var string
	 */
	public $unitprice1;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxitem2;
	/**
	 * @access public
	 * @var string
	 */
	public $unitprice2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $piggyback;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
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
	public $zip;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexusCountry;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var TaxGroupTaxItemList
	 */
	public $taxItemList;
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
		"description" => "string",
		"state" => "string",
		"subsidiaryList" => "RecordRefList",
		"taxitem1" => "RecordRef",
		"unitprice1" => "string",
		"taxitem2" => "RecordRef",
		"unitprice2" => "string",
		"piggyback" => "boolean",
		"isInactive" => "boolean",
		"rate" => "float",
		"taxType" => "RecordRef",
		"includeChildren" => "boolean",
		"county" => "string",
		"city" => "string",
		"zip" => "string",
		"nexusCountry" => "RecordRef",
		"isDefault" => "boolean",
		"taxItemList" => "TaxGroupTaxItemList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
