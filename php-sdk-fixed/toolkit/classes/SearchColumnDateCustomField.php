<?php

class SearchColumnDateCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
