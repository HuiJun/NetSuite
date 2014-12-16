<?php

class VendorReturnAuthorizationExpenseList {
	/**
	 * @access public
	 * @var VendorReturnAuthorizationExpense[]
	 */
	public $expense;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"expense" => "VendorReturnAuthorizationExpense[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
