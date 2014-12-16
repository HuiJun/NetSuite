<?php

class CustomerDepositApplyList {
	/**
	 * @access public
	 * @var CustomerDepositApply[]
	 */
	public $customerDepositApply;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"customerDepositApply" => "CustomerDepositApply[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
