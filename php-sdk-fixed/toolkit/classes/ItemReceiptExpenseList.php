<?php

class ItemReceiptExpenseList {
	/**
	 * @access public
	 * @var ItemReceiptExpense[]
	 */
	public $expense;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"expense" => "ItemReceiptExpense[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
