<?php

class SearchColumnDoubleField extends SearchColumnField {
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
