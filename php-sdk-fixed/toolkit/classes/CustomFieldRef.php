<?php

class CustomFieldRef {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"internalId" => "string",
		"scriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
