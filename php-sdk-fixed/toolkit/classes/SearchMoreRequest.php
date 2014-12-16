<?php

class SearchMoreRequest {
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"pageIndex" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
