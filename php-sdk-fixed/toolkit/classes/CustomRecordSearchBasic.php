<?php

class CustomRecordSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recType;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $created;
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
	 * @var SearchLongField
	 */
	public $id;
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
	 * @var SearchDateField
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $lastModifiedBy;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"recType" => "RecordRef",
		"availableOffline" => "SearchBooleanField",
		"created" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"lastModified" => "SearchDateField",
		"lastModifiedBy" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
