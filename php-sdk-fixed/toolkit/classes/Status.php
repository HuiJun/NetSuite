<?php

class Status {
	/**
	 * @access public
	 * @var StatusDetail[]
	 */
	public $statusDetail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSuccess;

	static $paramtypesmap = array(
		"statusDetail" => "StatusDetail[]",
		"isSuccess" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
