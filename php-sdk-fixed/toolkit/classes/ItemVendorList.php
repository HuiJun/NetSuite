<?php

class ItemVendorList {
	/**
	 * @access public
	 * @var ItemVendor[]
	 */
	public $itemVendor;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemVendor" => "ItemVendor[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
