<?php

class TransactionColumnCustomField extends CustomFieldType {
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
	 * @var RecordRef
	 */
	public $insertBefore;
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
	public $colExpense;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colPurchase;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colSale;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colOpportunity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colStore;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colStoreHidden;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colJournal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colBuild;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colExpenseReport;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colTransferOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colTimeGroup;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colItemReceipt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colItemReceiptOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colItemFulfillment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colItemFulfillmentOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colPrintFlag;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colPickingTicket;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colPackingSlip;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colReturnForm;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colStoreWithGroups;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colGroupOnInvoices;
	/**
	 * @access public
	 * @var boolean
	 */
	public $colKitItem;
	/**
	 * @access public
	 * @var TransactionColumnCustomFieldFilterList
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
		"insertBefore" => "RecordRef",
		"availableToSso" => "boolean",
		"displayType" => "CustomizationDisplayType",
		"displayWidth" => "integer",
		"displayHeight" => "integer",
		"help" => "string",
		"linkText" => "string",
		"isMandatory" => "boolean",
		"maxLength" => "integer",
		"minValue" => "float",
		"maxValue" => "float",
		"defaultChecked" => "boolean",
		"defaultValue" => "string",
		"isFormula" => "boolean",
		"defaultSelection" => "RecordRef",
		"dynamicDefault" => "CustomizationDynamicDefault",
		"sourceList" => "RecordRef",
		"sourceFrom" => "RecordRef",
		"sourceFilterBy" => "RecordRef",
		"colExpense" => "boolean",
		"colPurchase" => "boolean",
		"colSale" => "boolean",
		"colOpportunity" => "boolean",
		"colStore" => "boolean",
		"colStoreHidden" => "boolean",
		"colJournal" => "boolean",
		"colBuild" => "boolean",
		"colExpenseReport" => "boolean",
		"colTime" => "boolean",
		"colTransferOrder" => "boolean",
		"colTimeGroup" => "boolean",
		"colItemReceipt" => "boolean",
		"colItemReceiptOrder" => "boolean",
		"colItemFulfillment" => "boolean",
		"colItemFulfillmentOrder" => "boolean",
		"colPrintFlag" => "boolean",
		"colPickingTicket" => "boolean",
		"colPackingSlip" => "boolean",
		"colReturnForm" => "boolean",
		"colStoreWithGroups" => "boolean",
		"colGroupOnInvoices" => "boolean",
		"colKitItem" => "boolean",
		"filterList" => "TransactionColumnCustomFieldFilterList",
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
