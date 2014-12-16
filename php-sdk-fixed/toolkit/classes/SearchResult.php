<?php

class SearchResult {
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
	 * @var integer
	 */
	public $pageSize;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalPages;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;
	/**
	 * @access public
	 * @var string
	 */
	public $searchId;
	/**
	 * @access public
	 * @var RecordList
	 */
	public $recordList;
	/**
	 * @access public
	 * @var SearchRowList
	 */
	public $searchRowList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"searchId" => "string",
		"recordList" => "RecordList",
		"searchRowList" => "SearchRowList",
	);
    public static function create()
    {
        return new static();
    }
}
