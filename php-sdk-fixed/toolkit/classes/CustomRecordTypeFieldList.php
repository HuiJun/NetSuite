<?php

class CustomRecordTypeFieldList {
	/**
	 * @access public
	 * @var CustomRecordCustomField[]
	 */
	public $customField;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"customField" => "CustomRecordCustomField[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
