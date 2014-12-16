<?php

class CustomRecordCustomFieldFilterList {
	/**
	 * @access public
	 * @var CustomRecordCustomFieldFilter[]
	 */
	public $filter;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"filter" => "CustomRecordCustomFieldFilter[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
