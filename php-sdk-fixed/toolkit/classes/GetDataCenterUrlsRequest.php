<?php

class GetDataCenterUrlsRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $account;

	static $paramtypesmap = array(
		"account" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
