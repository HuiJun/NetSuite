<?php

class GetSavedSearchRecord {
	/**
	 * @access public
	 * @var SearchRecordType
	 */
	public $searchType;

	static $paramtypesmap = array(
		"searchType" => "SearchRecordType",
	);
    public static function create()
    {
        return new static();
    }
}
