<?php

class AsyncGetListRequest {
	/**
	 * @access public
	 * @var BaseRef[]
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
