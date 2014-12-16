<?php

class SearchDoubleField {
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDoubleFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "float",
		"searchValue2" => "float",
		"operator" => "SearchDoubleFieldOperator",
	);
    public static function create()
    {
        return new static();
    }
}
