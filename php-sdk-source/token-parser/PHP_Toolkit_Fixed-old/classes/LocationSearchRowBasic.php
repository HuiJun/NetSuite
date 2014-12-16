<?php

class LocationSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
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
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isOffice;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOffice" => "SearchColumnBooleanField[]",
		"makeInventoryAvailable" => "SearchColumnBooleanField[]",
		"makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"phone" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"tranPrefix" => "SearchColumnStringField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
