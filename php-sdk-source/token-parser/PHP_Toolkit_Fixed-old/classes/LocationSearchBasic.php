<?php

class LocationSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
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
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOffice;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranprefix;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOffice" => "SearchBooleanField",
		"makeInventoryAvailable" => "SearchBooleanField",
		"makeInventoryAvailableStore" => "SearchBooleanField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"phone" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"tranprefix" => "SearchStringField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
