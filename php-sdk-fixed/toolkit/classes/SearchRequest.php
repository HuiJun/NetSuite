<?php

class SearchRequest {
	/**
	 * @access public
	 * @var SearchRecord
	 */
	public $searchRecord;

	static $paramtypesmap = array(
		"searchRecord" => "SearchRecord",
	);
    public static function create()
    {
        return new static();
    }
}
