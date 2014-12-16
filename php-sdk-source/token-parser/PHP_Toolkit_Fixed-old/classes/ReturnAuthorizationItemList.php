<?php

class ReturnAuthorizationItemList {
	/**
	 * @access public
	 * @var ReturnAuthorizationItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "ReturnAuthorizationItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
