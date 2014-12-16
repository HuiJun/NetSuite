<?php

class StatusDetail {
	/**
	 * @access public
	 * @var StatusDetailCodeType
	 */
	public $code;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var StatusDetailType
	 */
	public $type;

	static $paramtypesmap = array(
		"code" => "StatusDetailCodeType",
		"message" => "string",
		"type" => "StatusDetailType",
	);
    public static function create()
    {
        return new static();
    }
}
