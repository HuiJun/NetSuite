<?php

class CustomRecordSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
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
	 * @var SearchColumnDateField[]
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $lastModifiedBy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"recType" => "RecordRef",
		"altName" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"created" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModified" => "SearchColumnDateField[]",
		"lastModifiedBy" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
