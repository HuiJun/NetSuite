<?php

class BudgetSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $global;
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
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $year;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $year2;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"amount" => "SearchDoubleField",
		"category" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"global" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"year" => "SearchMultiSelectField",
		"year2" => "SearchMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
