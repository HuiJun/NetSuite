<?php

class VendorPaymentCreditList {
	/**
	 * @access public
	 * @var VendorPaymentCredit[]
	 */
	public $credit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"credit" => "VendorPaymentCredit[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
