<?php

class StatisticalJournalEntry extends Record {
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
	public $parentExpenseAlloc;
	/**
	 * @access public
	 * @var boolean
	 */
	public $approved;
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
	 * @var dateTime
	 */
	public $reversalDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $reversalDefer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var StatisticalJournalEntryLineList
	 */
	public $lineList;
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
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranId" => "string",
		"parentExpenseAlloc" => "RecordRef",
		"approved" => "boolean",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"reversalDate" => "dateTime",
		"reversalDefer" => "boolean",
		"subsidiary" => "RecordRef",
		"unitsType" => "RecordRef",
		"lineList" => "StatisticalJournalEntryLineList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
