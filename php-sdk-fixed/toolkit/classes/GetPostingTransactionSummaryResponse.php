<?php

class GetPostingTransactionSummaryResponse {
	/**
	 * @access public
	 * @var GetPostingTransactionSummaryResult
	 */
	public $getPostingTransactionSummaryResult;

	static $paramtypesmap = array(
		"getPostingTransactionSummaryResult" => "GetPostingTransactionSummaryResult",
	);
    public static function create()
    {
        return new static();
    }
}
