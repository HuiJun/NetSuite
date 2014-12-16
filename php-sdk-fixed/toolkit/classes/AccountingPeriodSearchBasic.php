<?php

class AccountingPeriodSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allLocked;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowNonGlChanges;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $apLocked;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $arLocked;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $closed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closedOnDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
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
	public $isAdjust;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isQuarter;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isYear;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $payrollLocked;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $periodName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;

	static $paramtypesmap = array(
		"allLocked" => "SearchBooleanField",
		"allowNonGlChanges" => "SearchBooleanField",
		"apLocked" => "SearchBooleanField",
		"arLocked" => "SearchBooleanField",
		"closed" => "SearchBooleanField",
		"closedOnDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isAdjust" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isQuarter" => "SearchBooleanField",
		"isYear" => "SearchBooleanField",
		"parent" => "SearchMultiSelectField",
		"payrollLocked" => "SearchBooleanField",
		"periodName" => "SearchStringField",
		"startDate" => "SearchDateField",
	);
    public static function create()
    {
        return new static();
    }
}
