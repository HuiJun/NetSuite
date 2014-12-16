<?php

class SearchCustomFieldList {
	/**
	 * @access public
	 * @var SearchCustomField[]
	 */
	public $customField;

	static $paramtypesmap = array(
		"customField" => "SearchCustomField[]",
	);
    public static function create()
    {
        return new static();
    }
}
