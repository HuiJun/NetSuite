<?php

class TimeSheet extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var Duration
	 */
	public $totalHours;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var TimeSheetTimeGridList
	 */
	public $timeGridList;
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
		"customForm" => "RecordRef",
		"employee" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"totalHours" => "Duration",
		"approvalStatus" => "RecordRef",
		"subsidiary" => "RecordRef",
		"timeGridList" => "TimeSheetTimeGridList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
