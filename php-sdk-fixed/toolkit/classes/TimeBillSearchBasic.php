<?php

class TimeBillSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $approved;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billable;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $date;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $duration;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $exempt;
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
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paidByPayroll;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paidExternally;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $productive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $temporaryLocalJurisdiction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $temporaryStateJurisdiction;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $utilized;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"approved" => "SearchBooleanField",
		"billable" => "SearchBooleanField",
		"class" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"date" => "SearchDateField",
		"dateCreated" => "SearchDateField",
		"department" => "SearchMultiSelectField",
		"duration" => "SearchDoubleField",
		"employee" => "SearchMultiSelectField",
		"exempt" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModified" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"paidByPayroll" => "SearchBooleanField",
		"paidExternally" => "SearchBooleanField",
		"payItem" => "SearchMultiSelectField",
		"productive" => "SearchBooleanField",
		"status" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"temporaryLocalJurisdiction" => "SearchMultiSelectField",
		"temporaryStateJurisdiction" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"utilized" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
