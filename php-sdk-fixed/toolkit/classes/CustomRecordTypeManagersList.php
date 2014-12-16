<?php

class CustomRecordTypeManagersList {
	/**
	 * @access public
	 * @var CustomRecordTypeManagers[]
	 */
	public $managers;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"managers" => "CustomRecordTypeManagers[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
