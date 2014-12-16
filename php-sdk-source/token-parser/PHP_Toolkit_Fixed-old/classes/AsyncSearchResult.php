<?php

class AsyncSearchResult extends AsyncResult {
	/**
	 * @access public
	 * @var SearchResult
	 */
	public $searchResult;

	static $paramtypesmap = array(
		"searchResult" => "SearchResult",
	);
    public static function create()
    {
        return new static();
    }
}
