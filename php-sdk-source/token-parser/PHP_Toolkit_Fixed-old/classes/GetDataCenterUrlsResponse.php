<?php

class GetDataCenterUrlsResponse {
	/**
	 * @access public
	 * @var GetDataCenterUrlsResult
	 */
	public $getDataCenterUrlsResult;

	static $paramtypesmap = array(
		"getDataCenterUrlsResult" => "GetDataCenterUrlsResult",
	);
    public static function create()
    {
        return new static();
    }
}
