<?php

class CurrencyRate extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transactionCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"transactionCurrency" => "RecordRef",
		"exchangeRate" => "float",
		"effectiveDate" => "dateTime",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
