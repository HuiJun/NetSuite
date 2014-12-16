<?php

class getSelectValueRequest {
	/**
	 * @access public
	 * @var GetSelectValueFieldDescription
	 */
	public $fieldDescription;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"fieldDescription" => "GetSelectValueFieldDescription",
		"pageIndex" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
