<?php

class CustomerCurrency {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var float
	 */
	public $consolBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $depositBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $consolDepositBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $overdueBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $consolOverdueBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var float
	 */
	public $consolUnbilledOrders;
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

	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"balance" => "float",
		"consolBalance" => "float",
		"depositBalance" => "float",
		"consolDepositBalance" => "float",
		"overdueBalance" => "float",
		"consolOverdueBalance" => "float",
		"unbilledOrders" => "float",
		"consolUnbilledOrders" => "float",
		"overrideCurrencyFormat" => "boolean",
		"displaySymbol" => "string",
		"symbolPlacement" => "CurrencySymbolPlacement",
	);
    public static function create()
    {
        return new static();
    }
}
