<?php

class PostingTransactionSummaryList {
	/**
	 * @access public
	 * @var PostingTransactionSummary[]
	 */
	public $postingTransactionSummary;

	static $paramtypesmap = array(
		"postingTransactionSummary" => "PostingTransactionSummary[]",
	);
    public static function create()
    {
        return new static();
    }
}
