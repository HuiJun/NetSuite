<?php

class CurrencyRateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transactionCurrency;

	static $paramtypesmap = array(
		"baseCurrency" => "SearchColumnSelectField[]",
		"effectiveDate" => "SearchColumnDateField[]",
		"exchangeRate" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"transactionCurrency" => "SearchColumnSelectField[]",
	);
    public static function create()
    {
        return new static();
    }
}
