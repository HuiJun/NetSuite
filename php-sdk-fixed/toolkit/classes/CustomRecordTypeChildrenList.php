<?php

class CustomRecordTypeChildrenList {
	/**
	 * @access public
	 * @var CustomRecordTypeChildren[]
	 */
	public $children;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"children" => "CustomRecordTypeChildren[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
