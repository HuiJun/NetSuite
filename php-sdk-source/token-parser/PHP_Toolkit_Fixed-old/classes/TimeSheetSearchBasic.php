<?php

class TimeSheetSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
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
	 * @var SearchDateField
	 */
	public $timeSheetDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $totalHours;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"approvalStatus" => "SearchMultiSelectField",
		"employee" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"timeSheetDate" => "SearchDateField",
		"totalHours" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
