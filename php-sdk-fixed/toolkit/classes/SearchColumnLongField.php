<?php

class SearchColumnLongField extends SearchColumnField {
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
