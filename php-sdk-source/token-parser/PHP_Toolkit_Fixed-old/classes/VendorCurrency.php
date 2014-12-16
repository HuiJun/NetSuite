<?php

class VendorCurrency {
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
	public $unbilledOrders;

	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"balance" => "float",
		"unbilledOrders" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
