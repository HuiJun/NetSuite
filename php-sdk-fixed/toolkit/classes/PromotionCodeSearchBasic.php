<?php

class PromotionCodeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $applyDiscountTo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $discount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $freeShipItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"applyDiscountTo" => "SearchEnumMultiSelectField",
		"code" => "SearchStringField",
		"description" => "SearchStringField",
		"discount" => "SearchMultiSelectField",
		"discountAmount" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"freeShipItem" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isPublic" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"partner" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
