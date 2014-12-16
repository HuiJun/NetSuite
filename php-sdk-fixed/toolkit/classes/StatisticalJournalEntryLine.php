<?php

class StatisticalJournalEntryLine {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $scheduleNum;
	/**
	 * @access public
	 * @var float
	 */
	public $debit;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
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
	public $lineUnit;
	/**
	 * @access public
	 * @var string
	 */
	public $previewDebit;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "RecordRef",
		"location" => "RecordRef",
		"scheduleNum" => "RecordRef",
		"debit" => "float",
		"memo" => "string",
		"entity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"lineUnit" => "RecordRef",
		"previewDebit" => "string",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
