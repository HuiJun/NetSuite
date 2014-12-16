<?php

class SearchColumnSelectField extends SearchColumnField {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
