<?php

class AccountingTransactionSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $altSalesAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $altSalesNetAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $bookSpecificTransaction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $catchUpPeriod;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $debitAmount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $grossAmount;
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
	public $multiSubsidiary;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $netAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityRevCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $recognizedRevenue;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $revCommitStatus;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $revenueStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $revRecOnRevCommitment;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $tranIsVsoeBundle;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoeAllocation;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"accountingBook" => "SearchMultiSelectField",
		"accountType" => "SearchMultiSelectField",
		"altSalesAmount" => "SearchDoubleField",
		"altSalesNetAmount" => "SearchDoubleField",
		"amount" => "SearchDoubleField",
		"bookSpecificTransaction" => "SearchBooleanField",
		"catchUpPeriod" => "SearchMultiSelectField",
		"creditAmount" => "SearchDoubleField",
		"debitAmount" => "SearchDoubleField",
		"deferRevRec" => "SearchBooleanField",
		"exchangeRate" => "SearchDoubleField",
		"grossAmount" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"multiSubsidiary" => "SearchBooleanField",
		"netAmount" => "SearchDoubleField",
		"quantityRevCommitted" => "SearchDoubleField",
		"recognizedRevenue" => "SearchDoubleField",
		"revCommitStatus" => "SearchEnumMultiSelectField",
		"revenueStatus" => "SearchEnumMultiSelectField",
		"revRecEndDate" => "SearchDateField",
		"revRecOnRevCommitment" => "SearchBooleanField",
		"revRecStartDate" => "SearchDateField",
		"subsidiary" => "SearchMultiSelectField",
		"tranIsVsoeBundle" => "SearchBooleanField",
		"type" => "SearchEnumMultiSelectField",
		"vsoeAllocation" => "SearchDoubleField",
	);
    public static function create()
    {
        return new static();
    }
}
