<?php

class GetServerTimeResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $serverTime;

	static $paramtypesmap = array(
		"status" => "Status",
		"serverTime" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
