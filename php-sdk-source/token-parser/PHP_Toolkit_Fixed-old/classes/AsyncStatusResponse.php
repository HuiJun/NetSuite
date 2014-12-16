<?php

class AsyncStatusResponse {
	/**
	 * @access public
	 * @var AsyncStatusResult
	 */
	public $asyncStatusResult;

	static $paramtypesmap = array(
		"asyncStatusResult" => "AsyncStatusResult",
	);
    public static function create()
    {
        return new static();
    }
}
