<?php

class CustomerPaymentCreditList {
	/**
	 * @access public
	 * @var CustomerPaymentCredit[]
	 */
	public $credit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"credit" => "CustomerPaymentCredit[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
