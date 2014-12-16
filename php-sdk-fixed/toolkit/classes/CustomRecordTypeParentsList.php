<?php

class CustomRecordTypeParentsList {
	/**
	 * @access public
	 * @var CustomRecordTypeParents[]
	 */
	public $parents;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"parents" => "CustomRecordTypeParents[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
