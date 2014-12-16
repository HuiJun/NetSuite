<?php

class Currency extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $symbol;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBaseCurrency;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $overrideCurrencyFormat;
	/**
	 * @access public
	 * @var string
	 */
	public $displaySymbol;
	/**
	 * @access public
	 * @var CurrencySymbolPlacement
	 */
	public $symbolPlacement;
	/**
	 * @access public
	 * @var CurrencyLocale
	 */
	public $locale;
	/**
	 * @access public
	 * @var string
	 */
	public $formatSample;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var CurrencyFxRateUpdateTimezone
	 */
	public $fxRateUpdateTimezone;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inclInFxRateUpdates;
	/**
	 * @access public
	 * @var CurrencyCurrencyPrecision
	 */
	public $currencyPrecision;
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
		"name" => "string",
		"symbol" => "string",
		"isBaseCurrency" => "boolean",
		"isInactive" => "boolean",
		"overrideCurrencyFormat" => "boolean",
		"displaySymbol" => "string",
		"symbolPlacement" => "CurrencySymbolPlacement",
		"locale" => "CurrencyLocale",
		"formatSample" => "string",
		"exchangeRate" => "float",
		"fxRateUpdateTimezone" => "CurrencyFxRateUpdateTimezone",
		"inclInFxRateUpdates" => "boolean",
		"currencyPrecision" => "CurrencyCurrencyPrecision",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
