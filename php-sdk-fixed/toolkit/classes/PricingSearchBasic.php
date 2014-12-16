<?php

class PricingSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $assignedPriceLevel;
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
	 * @var SearchDoubleField
	 */
	public $maximumQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rate;

	static $paramtypesmap = array(
		"assignedPriceLevel" => "SearchBooleanField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"maximumQuantity" => "SearchDoubleField",
		"minimumQuantity" => "SearchDoubleField",
		"priceLevel" => "SearchMultiSelectField",
		"rate" => "SearchDoubleField",
	);
    public static function create()
    {
        return new static();
    }
}
