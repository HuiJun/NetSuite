<?php

class ItemFulfillmentItemList {
	/**
	 * @access public
	 * @var ItemFulfillmentItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "ItemFulfillmentItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
