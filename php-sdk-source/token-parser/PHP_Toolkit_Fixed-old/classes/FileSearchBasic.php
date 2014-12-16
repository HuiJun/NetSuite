<?php

class FileSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableWithoutLogin;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $documentSize;
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
	public $fileType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $folder;
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
	public $isAvailable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isLink;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $modified;
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
	 * @var SearchStringField
	 */
	public $url;

	static $paramtypesmap = array(
		"availableWithoutLogin" => "SearchBooleanField",
		"created" => "SearchDateField",
		"dateViewed" => "SearchDateField",
		"description" => "SearchStringField",
		"documentSize" => "SearchLongField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fileType" => "SearchEnumMultiSelectField",
		"folder" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isAvailable" => "SearchBooleanField",
		"isLink" => "SearchBooleanField",
		"modified" => "SearchDateField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"url" => "SearchStringField",
	);
    public static function create()
    {
        return new static();
    }
}
