<?php

class SearchDateCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var SearchDate
	 */
	public $predefinedSearchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDateFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"predefinedSearchValue" => "SearchDate",
		"searchValue" => "dateTime",
		"searchValue2" => "dateTime",
		"operator" => "SearchDateFieldOperator",
	);
    public static function create()
    {
        return new static();
    }
}
