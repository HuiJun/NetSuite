<?php

class SearchColumnCustomFieldList {
	/**
	 * @access public
	 * @var SearchColumnCustomField[]
	 */
	public $customField;

	static $paramtypesmap = array(
		"customField" => "SearchColumnCustomField[]",
	);
    public static function create()
    {
        return new static();
    }
}
