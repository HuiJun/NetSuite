<?php

class SearchTextNumberField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchTextNumberFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string",
		"searchValue2" => "string",
		"operator" => "SearchTextNumberFieldOperator",
	);
    public static function create()
    {
        return new static();
    }
}
