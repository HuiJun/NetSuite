<?php

class AccountSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $cashFlowRateType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category1099Misc;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
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
	 * @var SearchEnumMultiSelectField
	 */
	public $generalRateType;
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
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"balance" => "SearchDoubleField",
		"cashFlowRateType" => "SearchEnumMultiSelectField",
		"category1099Misc" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"generalRateType" => "SearchEnumMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"number" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
