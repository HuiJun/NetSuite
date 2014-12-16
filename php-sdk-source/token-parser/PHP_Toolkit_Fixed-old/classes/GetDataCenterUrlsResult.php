<?php

class GetDataCenterUrlsResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var DataCenterUrls
	 */
	public $dataCenterUrls;

	static $paramtypesmap = array(
		"status" => "Status",
		"dataCenterUrls" => "DataCenterUrls",
	);
    public static function create()
    {
        return new static();
    }
}
