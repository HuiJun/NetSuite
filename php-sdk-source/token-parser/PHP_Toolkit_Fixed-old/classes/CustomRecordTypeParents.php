<?php

class CustomRecordTypeParents {
	/**
	 * @access public
	 * @var string
	 */
	public $childDescr;

	static $paramtypesmap = array(
		"childDescr" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
