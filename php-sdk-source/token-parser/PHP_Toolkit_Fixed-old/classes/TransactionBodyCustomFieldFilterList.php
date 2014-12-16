<?php

class TransactionBodyCustomFieldFilterList {
	/**
	 * @access public
	 * @var TransactionBodyCustomFieldFilter[]
	 */
	public $filter;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"filter" => "TransactionBodyCustomFieldFilter[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
