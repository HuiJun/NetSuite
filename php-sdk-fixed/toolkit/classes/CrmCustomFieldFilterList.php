<?php

class CrmCustomFieldFilterList {
	/**
	 * @access public
	 * @var CrmCustomFieldFilter[]
	 */
	public $filter;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"filter" => "CrmCustomFieldFilter[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
