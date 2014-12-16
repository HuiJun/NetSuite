<?php

class GetPostingTransactionSummaryRequest {
	/**
	 * @access public
	 * @var PostingTransactionSummaryField
	 */
	public $fields;
	/**
	 * @access public
	 * @var PostingTransactionSummaryFilter
	 */
	public $filters;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"fields" => "PostingTransactionSummaryField",
		"filters" => "PostingTransactionSummaryFilter",
		"pageIndex" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
