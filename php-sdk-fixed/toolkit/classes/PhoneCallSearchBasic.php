<?php

class PhoneCallSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $createdBy;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
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
	 * @var SearchBooleanField
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"assigned" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"contact" => "SearchMultiSelectField",
		"createdBy" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isPrivate" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"owner" => "SearchBooleanField",
		"phone" => "SearchStringField",
		"priority" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
