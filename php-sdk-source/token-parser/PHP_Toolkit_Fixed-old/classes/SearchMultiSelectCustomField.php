<?php

class SearchMultiSelectCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var ListOrRecordRef[]
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchMultiSelectFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef[]",
		"operator" => "SearchMultiSelectFieldOperator",
	);
    public static function create()
    {
        return new static();
    }
}
