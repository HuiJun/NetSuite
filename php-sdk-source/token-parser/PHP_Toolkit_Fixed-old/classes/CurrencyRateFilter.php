<?php

class CurrencyRateFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromCurrency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;

	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"fromCurrency" => "RecordRef",
		"effectiveDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
