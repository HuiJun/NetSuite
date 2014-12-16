<?php

class Budget extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $year;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
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
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var BudgetBudgetType
	 */
	public $budgetType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount1;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount2;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount3;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount4;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount5;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount6;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount7;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount8;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount9;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount10;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount11;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount12;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"year" => "RecordRef",
		"customer" => "RecordRef",
		"item" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"account" => "RecordRef",
		"subsidiary" => "RecordRef",
		"category" => "RecordRef",
		"budgetType" => "BudgetBudgetType",
		"currency" => "RecordRef",
		"periodAmount1" => "float",
		"periodAmount2" => "float",
		"periodAmount3" => "float",
		"periodAmount4" => "float",
		"periodAmount5" => "float",
		"periodAmount6" => "float",
		"periodAmount7" => "float",
		"periodAmount8" => "float",
		"periodAmount9" => "float",
		"periodAmount10" => "float",
		"periodAmount11" => "float",
		"periodAmount12" => "float",
		"amount" => "float",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
