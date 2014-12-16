<?php

class AsyncGetListResult extends AsyncResult {
	/**
	 * @access public
	 * @var ReadResponseList
	 */
	public $readResponseList;

	static $paramtypesmap = array(
		"readResponseList" => "ReadResponseList",
	);
    public static function create()
    {
        return new static();
    }
}
