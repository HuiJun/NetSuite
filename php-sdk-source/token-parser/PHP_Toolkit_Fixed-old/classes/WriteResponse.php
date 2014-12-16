<?php

class WriteResponse {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"status" => "Status",
		"baseRef" => "BaseRef",
	);
    public static function create()
    {
        return new static();
    }
}
