<?php

class GetAsyncResultResponse {
	/**
	 * @access public
	 * @var AsyncResult
	 */
	public $asyncResult;

	static $paramtypesmap = array(
		"asyncResult" => "AsyncResult",
	);
    public static function create()
    {
        return new static();
    }
}
