<?php

class SearchStringCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchStringFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string",
		"operator" => "SearchStringFieldOperator",
	);
    public static function create()
    {
        return new static();
    }
}
