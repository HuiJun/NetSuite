<?php

class SearchColumnStringField extends SearchColumnField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
