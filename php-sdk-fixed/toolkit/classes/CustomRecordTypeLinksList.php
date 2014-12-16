<?php

class CustomRecordTypeLinksList {
	/**
	 * @access public
	 * @var CustomRecordTypeLinks[]
	 */
	public $links;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"links" => "CustomRecordTypeLinks[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
