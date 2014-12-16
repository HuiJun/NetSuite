<?php

class SearchMultiSelectField {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchMultiSelectFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "RecordRef[]",
		"operator" => "SearchMultiSelectFieldOperator",
	);
    public static function create()
    {
        return new static();
    }
}
