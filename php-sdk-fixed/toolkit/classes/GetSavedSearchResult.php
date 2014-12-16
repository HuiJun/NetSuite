<?php

class GetSavedSearchResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $recordRefList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"recordRefList" => "RecordRefList",
	);
    public static function create()
    {
        return new static();
    }
}
