<?php

class SearchColumnBooleanField extends SearchColumnField {
	/**
	 * @access public
	 * @var boolean
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
