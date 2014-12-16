<?php

class VendorPaymentApplyList {
	/**
	 * @access public
	 * @var VendorPaymentApply[]
	 */
	public $apply;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"apply" => "VendorPaymentApply[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
