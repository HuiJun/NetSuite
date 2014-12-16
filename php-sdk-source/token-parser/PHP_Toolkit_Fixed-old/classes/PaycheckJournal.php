<?php

class PaycheckJournal extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var PaycheckJournalCompanyContributionList
	 */
	public $companyContributionList;
	/**
	 * @access public
	 * @var PaycheckJournalDeductionList
	 */
	public $deductionList;
	/**
	 * @access public
	 * @var PaycheckJournalEmployeeTaxList
	 */
	public $employeeTaxList;
	/**
	 * @access public
	 * @var PaycheckJournalCompanyTaxList
	 */
	public $companyTaxList;
	/**
	 * @access public
	 * @var PaycheckJournalEarningList
	 */
	public $earningList;
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
		"subsidiary" => "RecordRef",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranId" => "string",
		"employee" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"account" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"companyContributionList" => "PaycheckJournalCompanyContributionList",
		"deductionList" => "PaycheckJournalDeductionList",
		"employeeTaxList" => "PaycheckJournalEmployeeTaxList",
		"companyTaxList" => "PaycheckJournalCompanyTaxList",
		"earningList" => "PaycheckJournalEarningList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
