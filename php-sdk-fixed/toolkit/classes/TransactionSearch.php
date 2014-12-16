<?php

class TransactionSearch extends SearchRecord {
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var AccountingPeriodSearchBasic
	 */
	public $accountingPeriodJoin;
	/**
	 * @access public
	 * @var AccountingTransactionSearchBasic
	 */
	public $accountingTransactionJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $appliedToTransactionJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $applyingTransactionJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $billingTransactionJoin;
	/**
	 * @access public
	 * @var BinSearchBasic
	 */
	public $binNumberJoin;
	/**
	 * @access public
	 * @var PhoneCallSearchBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var ClassificationSearchBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $cogsPurchaseJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $cogsSaleJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $createdFromJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerMainJoin;
	/**
	 * @access public
	 * @var DepartmentSearchBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $depositTransactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var ExpenseCategorySearchBasic
	 */
	public $expenseCategoryJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $fromLocationJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $fulfillingTransactionJoin;
	/**
	 * @access public
	 * @var InventoryDetailSearchBasic
	 */
	public $inventoryDetailJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var InventoryNumberSearchBasic
	 */
	public $itemNumberJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobMainJoin;
	/**
	 * @access public
	 * @var CampaignSearchBasic
	 */
	public $leadSourceJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchBasic
	 */
	public $manufacturingOperationTaskJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var OpportunitySearchBasic
	 */
	public $opportunityJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $paidTransactionJoin;
	/**
	 * @access public
	 * @var PartnerSearchBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $payingTransactionJoin;
	/**
	 * @access public
	 * @var PayrollItemSearchBasic
	 */
	public $payrollItemJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $purchaseOrderJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $requestorJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $revCommittingTransactionJoin;
	/**
	 * @access public
	 * @var ItemRevisionSearchBasic
	 */
	public $revisionJoin;
	/**
	 * @access public
	 * @var RevRecScheduleSearchBasic
	 */
	public $revRecScheduleJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $rgPostingTransactionJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $salesOrderJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $salesRepJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var TaskSearchBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $toLocationJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorLineJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TransactionSearchBasic",
		"accountJoin" => "AccountSearchBasic",
		"accountingPeriodJoin" => "AccountingPeriodSearchBasic",
		"accountingTransactionJoin" => "AccountingTransactionSearchBasic",
		"appliedToTransactionJoin" => "TransactionSearchBasic",
		"applyingTransactionJoin" => "TransactionSearchBasic",
		"billingTransactionJoin" => "TransactionSearchBasic",
		"binNumberJoin" => "BinSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"classJoin" => "ClassificationSearchBasic",
		"cogsPurchaseJoin" => "TransactionSearchBasic",
		"cogsSaleJoin" => "TransactionSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"createdFromJoin" => "TransactionSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"customerMainJoin" => "CustomerSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"depositTransactionJoin" => "TransactionSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"expenseCategoryJoin" => "ExpenseCategorySearchBasic",
		"fileJoin" => "FileSearchBasic",
		"fromLocationJoin" => "LocationSearchBasic",
		"fulfillingTransactionJoin" => "TransactionSearchBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"itemNumberJoin" => "InventoryNumberSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"jobMainJoin" => "JobSearchBasic",
		"leadSourceJoin" => "CampaignSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"paidTransactionJoin" => "TransactionSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"payingTransactionJoin" => "TransactionSearchBasic",
		"payrollItemJoin" => "PayrollItemSearchBasic",
		"purchaseOrderJoin" => "TransactionSearchBasic",
		"requestorJoin" => "EmployeeSearchBasic",
		"revCommittingTransactionJoin" => "TransactionSearchBasic",
		"revisionJoin" => "ItemRevisionSearchBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchBasic",
		"rgPostingTransactionJoin" => "TransactionSearchBasic",
		"salesOrderJoin" => "TransactionSearchBasic",
		"salesRepJoin" => "EmployeeSearchBasic",
		"subsidiaryJoin" => "SubsidiarySearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"toLocationJoin" => "LocationSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"vendorLineJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
