<?php

class GetAsyncResultRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"jobId" => "string",
		"pageIndex" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
