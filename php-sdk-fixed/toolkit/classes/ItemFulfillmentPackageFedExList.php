<?php

class ItemFulfillmentPackageFedExList {
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedEx[]
	 */
	public $packageFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"packageFedEx" => "ItemFulfillmentPackageFedEx[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
