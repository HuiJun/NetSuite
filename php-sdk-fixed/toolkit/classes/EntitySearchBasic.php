<?php

class EntitySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
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
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
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
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
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
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
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
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"entityId" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
