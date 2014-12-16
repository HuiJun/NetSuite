<?php

class TimeSheetSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $totalHours;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"approvalStatus" => "SearchColumnSelectField[]",
		"employee" => "SearchColumnSelectField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnLongField[]",
		"startDate" => "SearchColumnDateField[]",
		"totalHours" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
