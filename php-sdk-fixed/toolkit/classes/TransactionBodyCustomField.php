<?php

class TransactionBodyCustomField extends CustomFieldType {
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
	 * @var boolean
	 */
	public $availableToSso;
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
	public $bodyPurchase;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodySale;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyOpportunity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyJournal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyExpenseReport;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyStore;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyTransferOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyItemReceipt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyItemReceiptOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyItemFulfillment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyItemFulfillmentOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyInventoryAdjustment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyBTegata;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyAssemblyBuild;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyPrintFlag;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyPickingTicket;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyPrintPackingSlip;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyCustomerPayment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyVendorPayment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyDeposit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyBom;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyPrintStatement;
	/**
	 * @access public
	 * @var TransactionBodyCustomFieldFilterList
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
		"availableToSso" => "boolean",
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
		"bodyPurchase" => "boolean",
		"bodySale" => "boolean",
		"bodyOpportunity" => "boolean",
		"bodyJournal" => "boolean",
		"bodyExpenseReport" => "boolean",
		"bodyStore" => "boolean",
		"bodyTransferOrder" => "boolean",
		"bodyItemReceipt" => "boolean",
		"bodyItemReceiptOrder" => "boolean",
		"bodyItemFulfillment" => "boolean",
		"bodyItemFulfillmentOrder" => "boolean",
		"bodyInventoryAdjustment" => "boolean",
		"bodyBTegata" => "boolean",
		"bodyAssemblyBuild" => "boolean",
		"bodyPrintFlag" => "boolean",
		"bodyPickingTicket" => "boolean",
		"bodyPrintPackingSlip" => "boolean",
		"bodyCustomerPayment" => "boolean",
		"bodyVendorPayment" => "boolean",
		"bodyDeposit" => "boolean",
		"bodyBom" => "boolean",
		"bodyPrintStatement" => "boolean",
		"filterList" => "TransactionBodyCustomFieldFilterList",
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
