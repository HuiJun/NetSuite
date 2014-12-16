<?php

class ExpenseCategory extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expenseAcct;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $rateRequired;
	/**
	 * @access public
	 * @var float
	 */
	public $defaultRate;
	/**
	 * @access public
	 * @var ExpenseCategoryRatesList
	 */
	public $ratesList;
	/**
	 * @access public
	 * @var TranslationList
	 */
	public $translationsList;
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
		"name" => "string",
		"description" => "string",
		"expenseAcct" => "RecordRef",
		"isInactive" => "boolean",
		"rateRequired" => "boolean",
		"defaultRate" => "float",
		"ratesList" => "ExpenseCategoryRatesList",
		"translationsList" => "TranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
