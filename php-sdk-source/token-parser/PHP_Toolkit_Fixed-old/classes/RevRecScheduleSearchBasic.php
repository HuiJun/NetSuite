<?php

class RevRecScheduleSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amortizedAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $deferredAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $destAcct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $initialAmt;
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
	public $isRecognized;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jeDoc;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $pctComplete;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $pctRecognition;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $postPeriod;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $schedDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $scheduleNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scheduleNumberText;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $sourceAcct;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $srcTranPostPeriod;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $srcTranType;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $startOffset;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $templateName;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"amorStatus" => "SearchEnumMultiSelectField",
		"amortizedAmount" => "SearchDoubleField",
		"amorType" => "SearchEnumMultiSelectField",
		"amount" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"deferredAmount" => "SearchDoubleField",
		"destAcct" => "SearchMultiSelectField",
		"initialAmt" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isRecognized" => "SearchBooleanField",
		"jeDoc" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"pctComplete" => "SearchDoubleField",
		"pctRecognition" => "SearchDoubleField",
		"periodOffset" => "SearchLongField",
		"postPeriod" => "SearchMultiSelectField",
		"schedDate" => "SearchDateField",
		"scheduleNumber" => "SearchLongField",
		"scheduleNumberText" => "SearchStringField",
		"sourceAcct" => "SearchMultiSelectField",
		"srcTranPostPeriod" => "SearchMultiSelectField",
		"srcTranType" => "SearchMultiSelectField",
		"startOffset" => "SearchLongField",
		"templateName" => "SearchStringField",
		"useForeignAmounts" => "SearchBooleanField",
	);
    public static function create()
    {
        return new static();
    }
}
