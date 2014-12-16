<?php

class OtherCustomFieldFilterList {
	/**
	 * @access public
	 * @var OtherCustomFieldFilter[]
	 */
	public $filter;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"filter" => "OtherCustomFieldFilter[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
