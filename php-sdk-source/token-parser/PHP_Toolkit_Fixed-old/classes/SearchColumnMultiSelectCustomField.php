<?php

class SearchColumnMultiSelectCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var ListOrRecordRef[]
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
