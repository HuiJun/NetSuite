<?php

class CustomRecordType extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $recordName;
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
	 * @var CustomRecordTypeAccessType
	 */
	public $accessType;
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
	public $enableMailMerge;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOrdered;
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
	 * @var boolean
	 */
	public $enableDle;
	/**
	 * @access public
	 * @var boolean
	 */
	public $enableNameTranslation;
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
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var CustomRecordTypeTabsList
	 */
	public $tabsList;
	/**
	 * @access public
	 * @var CustomRecordTypeSublistsList
	 */
	public $sublistsList;
	/**
	 * @access public
	 * @var CustomRecordTypeFormsList
	 */
	public $formsList;
	/**
	 * @access public
	 * @var CustomRecordTypeOnlineFormsList
	 */
	public $onlineFormsList;
	/**
	 * @access public
	 * @var CustomRecordTypePermissionsList
	 */
	public $permissionsList;
	/**
	 * @access public
	 * @var CustomRecordTypeLinksList
	 */
	public $linksList;
	/**
	 * @access public
	 * @var CustomRecordTypeManagersList
	 */
	public $managersList;
	/**
	 * @access public
	 * @var CustomRecordTypeChildrenList
	 */
	public $childrenList;
	/**
	 * @access public
	 * @var CustomRecordTypeParentsList
	 */
	public $parentsList;
	/**
	 * @access public
	 * @var CustomRecordTypeTranslationsList
	 */
	public $translationsList;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;
	/**
	 * @access public
	 * @var CustomRecordTypeFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"recordName" => "string",
		"includeName" => "boolean",
		"showId" => "boolean",
		"showCreationDate" => "boolean",
		"showCreationDateOnList" => "boolean",
		"showLastModified" => "boolean",
		"showLastModifiedOnList" => "boolean",
		"showOwner" => "boolean",
		"showOwnerOnList" => "boolean",
		"showOwnerAllowChange" => "boolean",
		"accessType" => "CustomRecordTypeAccessType",
		"allowAttachments" => "boolean",
		"showNotes" => "boolean",
		"enableMailMerge" => "boolean",
		"isOrdered" => "boolean",
		"isAvailableOffline" => "boolean",
		"allowQuickSearch" => "boolean",
		"enableDle" => "boolean",
		"enableNameTranslation" => "boolean",
		"isInactive" => "boolean",
		"disclaimer" => "string",
		"enableNumbering" => "boolean",
		"numberingPrefix" => "string",
		"numberingSuffix" => "string",
		"numberingMinDigits" => "integer",
		"numberingInit" => "integer",
		"numberingCurrentNumber" => "integer",
		"allowNumberingOverride" => "boolean",
		"isNumberingUpdateable" => "boolean",
		"owner" => "RecordRef",
		"description" => "string",
		"tabsList" => "CustomRecordTypeTabsList",
		"sublistsList" => "CustomRecordTypeSublistsList",
		"formsList" => "CustomRecordTypeFormsList",
		"onlineFormsList" => "CustomRecordTypeOnlineFormsList",
		"permissionsList" => "CustomRecordTypePermissionsList",
		"linksList" => "CustomRecordTypeLinksList",
		"managersList" => "CustomRecordTypeManagersList",
		"childrenList" => "CustomRecordTypeChildrenList",
		"parentsList" => "CustomRecordTypeParentsList",
		"translationsList" => "CustomRecordTypeTranslationsList",
		"scriptId" => "string",
		"customFieldList" => "CustomRecordTypeFieldList",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
