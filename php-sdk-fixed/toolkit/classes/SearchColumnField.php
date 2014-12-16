<?php

class SearchColumnField {
	/**
	 * @access public
	 * @var string
	 */
	public $customLabel;

	static $paramtypesmap = array(
		"customLabel" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
