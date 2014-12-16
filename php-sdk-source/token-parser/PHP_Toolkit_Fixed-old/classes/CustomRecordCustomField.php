<?php

class CustomRecordCustomField extends CustomFieldType {
	/**
	 * @access public
	 * @var string
	 */
	public $label;
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
	 * @var RecordRef
	 */
	public $selectRecordType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $storeValue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showInList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $globalSearch;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isParent;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $insertBefore;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subtab;
	/**
	 * @access public
	 * @var CustomizationDisplayType
	 */
	public $displayType;
	/**
	 * @access public
	 * @var integer
	 */
	public $displayWidth;
	/**
	 * @access public
	 * @var integer
	 */
	public $displayHeight;
	/**
	 * @access public
	 * @var string
	 */
	public $help;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parentSubtab;
	/**
	 * @access public
	 * @var string
	 */
	public $linkText;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isMandatory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $checkSpelling;
	/**
	 * @access public
	 * @var integer
	 */
	public $maxLength;
	/**
	 * @access public
	 * @var float
	 */
	public $minValue;
	/**
	 * @access public
	 * @var float
	 */
	public $maxValue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $defaultChecked;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultValue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isFormula;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $defaultSelection;
	/**
	 * @access public
	 * @var CustomizationDynamicDefault
	 */
	public $dynamicDefault;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $searchDefault;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $searchCompareField;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $sourceList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $sourceFrom;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $sourcefilterby;
	/**
	 * @access public
	 * @var string
	 */
	public $recType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $roleRestrict;
	/**
	 * @access public
	 * @var CustomRecordCustomFieldFilterList
	 */
	public $filterList;
	/**
	 * @access public
	 * @var CustomizationAccessLevel
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var CustomizationSearchLevel
	 */
	public $searchLevel;
	/**
	 * @access public
	 * @var CustomFieldRoleAccessList
	 */
	public $roleAccessList;
	/**
	 * @access public
	 * @var CustomFieldDepartmentAccessList
	 */
	public $deptAccessList;
	/**
	 * @access public
	 * @var CustomFieldSubAccessList
	 */
	public $subAccessList;
	/**
	 * @access public
	 * @var CustomFieldTranslationsList
	 */
	public $translationsList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"label" => "string",
		"owner" => "RecordRef",
		"description" => "string",
		"selectRecordType" => "RecordRef",
		"storeValue" => "boolean",
		"showInList" => "boolean",
		"globalSearch" => "boolean",
		"isParent" => "boolean",
		"insertBefore" => "RecordRef",
		"subtab" => "RecordRef",
		"displayType" => "CustomizationDisplayType",
		"displayWidth" => "integer",
		"displayHeight" => "integer",
		"help" => "string",
		"parentSubtab" => "RecordRef",
		"linkText" => "string",
		"isMandatory" => "boolean",
		"checkSpelling" => "boolean",
		"maxLength" => "integer",
		"minValue" => "float",
		"maxValue" => "float",
		"defaultChecked" => "boolean",
		"defaultValue" => "string",
		"isFormula" => "boolean",
		"defaultSelection" => "RecordRef",
		"dynamicDefault" => "CustomizationDynamicDefault",
		"searchDefault" => "RecordRef",
		"searchCompareField" => "RecordRef",
		"sourceList" => "RecordRef",
		"sourceFrom" => "RecordRef",
		"sourcefilterby" => "RecordRef",
		"recType" => "string",
		"roleRestrict" => "boolean",
		"filterList" => "CustomRecordCustomFieldFilterList",
		"accessLevel" => "CustomizationAccessLevel",
		"searchLevel" => "CustomizationSearchLevel",
		"roleAccessList" => "CustomFieldRoleAccessList",
		"deptAccessList" => "CustomFieldDepartmentAccessList",
		"subAccessList" => "CustomFieldSubAccessList",
		"translationsList" => "CustomFieldTranslationsList",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
