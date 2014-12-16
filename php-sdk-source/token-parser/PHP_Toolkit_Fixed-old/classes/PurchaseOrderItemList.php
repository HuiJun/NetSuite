<?php

class PurchaseOrderItemList {
	/**
	 * @access public
	 * @var PurchaseOrderItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "PurchaseOrderItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
