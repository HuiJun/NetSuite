<?php

class ItemGroup extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeStartEndLines;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isVsoeBundle;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $defaultItemShipMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $availableToPartners;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $itemId;
	/**
	 * @access public
	 * @var string
	 */
	public $upcCode;
	/**
	 * @access public
	 * @var string
	 */
	public $displayName;
	/**
	 * @access public
	 * @var string
	 */
	public $vendorName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueProduct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
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
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var ItemCarrier
	 */
	public $itemCarrier;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $itemShipMethodList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $printItems;
	/**
	 * @access public
	 * @var ItemMemberList
	 */
	public $memberList;
	/**
	 * @access public
	 * @var TranslationList
	 */
	public $translationsList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"includeStartEndLines" => "boolean",
		"isVsoeBundle" => "boolean",
		"defaultItemShipMethod" => "RecordRef",
		"availableToPartners" => "boolean",
		"isInactive" => "boolean",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"issueProduct" => "RecordRef",
		"parent" => "RecordRef",
		"description" => "string",
		"subsidiaryList" => "RecordRefList",
		"includeChildren" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"itemCarrier" => "ItemCarrier",
		"itemShipMethodList" => "RecordRefList",
		"printItems" => "boolean",
		"memberList" => "ItemMemberList",
		"translationsList" => "TranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
