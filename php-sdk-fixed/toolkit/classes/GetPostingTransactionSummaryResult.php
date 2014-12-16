<?php

class GetPostingTransactionSummaryResult {
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
	 * @var PostingTransactionSummaryList
	 */
	public $postingTransactionSummaryList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"postingTransactionSummaryList" => "PostingTransactionSummaryList",
	);
    public static function create()
    {
        return new static();
    }
}
