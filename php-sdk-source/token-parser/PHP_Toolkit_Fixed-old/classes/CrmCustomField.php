<?php

class CrmCustomField extends CustomFieldType {
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
	public $sourceFilterBy;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToTask;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToMfgProjectTask;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToProjectTask;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToPhoneCall;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToEvent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToCase;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToCampaign;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesPerKeyword;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToSolution;
	/**
	 * @access public
	 * @var boolean
	 */
	public $appliesToIssue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $availableExternally;
	/**
	 * @access public
	 * @var boolean
	 */
	public $availableToSso;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showIssueChanges;
	/**
	 * @access public
	 * @var CrmCustomFieldFilterList
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
		"sourceFilterBy" => "RecordRef",
		"appliesToTask" => "boolean",
		"appliesToMfgProjectTask" => "boolean",
		"appliesToProjectTask" => "boolean",
		"appliesToPhoneCall" => "boolean",
		"appliesToEvent" => "boolean",
		"appliesToCase" => "boolean",
		"appliesToCampaign" => "boolean",
		"appliesPerKeyword" => "boolean",
		"appliesToSolution" => "boolean",
		"appliesToIssue" => "boolean",
		"availableExternally" => "boolean",
		"availableToSso" => "boolean",
		"showIssueChanges" => "boolean",
		"filterList" => "CrmCustomFieldFilterList",
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
