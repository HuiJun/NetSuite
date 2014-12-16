<?php

class ItemSupplyPlanSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $orderCreated;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $orderDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $orderType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityUom;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $receiptDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"orderCreated" => "SearchColumnBooleanField[]",
		"orderDate" => "SearchColumnDateField[]",
		"orderType" => "SearchColumnSelectField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"quantityUom" => "SearchColumnDoubleField[]",
		"receiptDate" => "SearchColumnDateField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"units" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
