<?php

class CheckAsyncStatusRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;

	static $paramtypesmap = array(
		"jobId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
