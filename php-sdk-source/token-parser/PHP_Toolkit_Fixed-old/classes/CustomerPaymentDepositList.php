<?php

class CustomerPaymentDepositList {
	/**
	 * @access public
	 * @var CustomerPaymentDeposit[]
	 */
	public $deposit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"deposit" => "CustomerPaymentDeposit[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
