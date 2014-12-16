<?php

class GetSelectValueFilter {
	/**
	 * @access public
	 * @var string
	 */
	public $filterValue;
	/**
	 * @access public
	 * @var GetSelectValueFilterOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"filterValue" => "string",
		"operator" => "GetSelectValueFilterOperator",
	);
    public static function create()
    {
        return new static();
    }
}
