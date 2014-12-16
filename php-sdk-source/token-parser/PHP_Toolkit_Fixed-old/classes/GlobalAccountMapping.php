<?php

class GlobalAccountMapping extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $sourceAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $destinationAccount;
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $customDimension;
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
		"effectiveDate" => "dateTime",
		"endDate" => "dateTime",
		"accountingBook" => "RecordRef",
		"subsidiary" => "RecordRef",
		"sourceAccount" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"destinationAccount" => "RecordRef",
		"customDimension" => "BaseRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
