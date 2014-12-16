<?php

class CustomerPaymentApplyList {
	/**
	 * @access public
	 * @var CustomerPaymentApply[]
	 */
	public $apply;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"apply" => "CustomerPaymentApply[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
