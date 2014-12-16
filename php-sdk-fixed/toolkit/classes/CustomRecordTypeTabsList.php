<?php

class CustomRecordTypeTabsList {
	/**
	 * @access public
	 * @var CustomRecordTypeTabs[]
	 */
	public $tabs;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"tabs" => "CustomRecordTypeTabs[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
