<?php

class ItemFulfillmentPackageList {
	/**
	 * @access public
	 * @var ItemFulfillmentPackage[]
	 */
	public $package;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"package" => "ItemFulfillmentPackage[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
