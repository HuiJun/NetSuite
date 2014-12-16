<?php

class CurrencyRateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $exchangeRate;
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
	public $transactionCurrency;

	static $paramtypesmap = array(
		"baseCurrency" => "SearchMultiSelectField",
		"effectiveDate" => "SearchDateField",
		"exchangeRate" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"transactionCurrency" => "SearchMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
