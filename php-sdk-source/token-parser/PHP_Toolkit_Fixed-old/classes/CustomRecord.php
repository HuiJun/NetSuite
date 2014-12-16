<?php

class CustomRecord extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $customRecordId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $disclaimer;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $created;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoName;
	/**
	 * @access public
	 * @var string
	 */
	public $altName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $enableNumbering;
	/**
	 * @access public
	 * @var string
	 */
	public $numberingPrefix;
	/**
	 * @access public
	 * @var string
	 */
	public $numberingSuffix;
	/**
	 * @access public
	 * @var integer
	 */
	public $numberingMinDigits;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var integer
	 */
	public $numberingInit;
	/**
	 * @access public
	 * @var integer
	 */
	public $numberingCurrentNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowNumberingOverride;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isNumberingUpdateable;
	/**
	 * @access public
	 * @var CustomRecordTranslationsList
	 */
	public $translationsList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showId;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showCreationDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showCreationDateOnList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showLastModified;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showLastModifiedOnList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showOwner;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showOwnerOnList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showOwnerAllowChange;
	/**
	 * @access public
	 * @var boolean
	 */
	public $usePermissions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowAttachments;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showNotes;
	/**
	 * @access public
	 * @var boolean
	 */
	public $enablEmailMerge;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOrdered;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowInlineEditing;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isAvailableOffline;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowQuickSearch;
	/**
	 * @access public
	 * @var string
	 */
	public $recordName;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customRecordId" => "string",
		"customForm" => "RecordRef",
		"isInactive" => "boolean",
		"disclaimer" => "string",
		"created" => "dateTime",
		"lastModified" => "dateTime",
		"name" => "string",
		"autoName" => "boolean",
		"altName" => "string",
		"owner" => "RecordRef",
		"recType" => "RecordRef",
		"enableNumbering" => "boolean",
		"numberingPrefix" => "string",
		"numberingSuffix" => "string",
		"numberingMinDigits" => "integer",
		"description" => "string",
		"numberingInit" => "integer",
		"numberingCurrentNumber" => "integer",
		"allowNumberingOverride" => "boolean",
		"isNumberingUpdateable" => "boolean",
		"translationsList" => "CustomRecordTranslationsList",
		"includeName" => "boolean",
		"showId" => "boolean",
		"showCreationDate" => "boolean",
		"showCreationDateOnList" => "boolean",
		"showLastModified" => "boolean",
		"showLastModifiedOnList" => "boolean",
		"showOwner" => "boolean",
		"showOwnerOnList" => "boolean",
		"showOwnerAllowChange" => "boolean",
		"usePermissions" => "boolean",
		"allowAttachments" => "boolean",
		"showNotes" => "boolean",
		"enablEmailMerge" => "boolean",
		"isOrdered" => "boolean",
		"allowInlineEditing" => "boolean",
		"isAvailableOffline" => "boolean",
		"allowQuickSearch" => "boolean",
		"recordName" => "string",
		"scriptId" => "string",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
