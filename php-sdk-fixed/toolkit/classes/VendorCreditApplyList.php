<?php

class VendorCreditApplyList {
	/**
	 * @access public
	 * @var VendorCreditApply[]
	 */
	public $apply;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"apply" => "VendorCreditApply[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
