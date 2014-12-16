<?php

class GetSavedSearchResponse {
	/**
	 * @access public
	 * @var GetSavedSearchResult
	 */
	public $getSavedSearchResult;

	static $paramtypesmap = array(
		"getSavedSearchResult" => "GetSavedSearchResult",
	);
    public static function create()
    {
        return new static();
    }
}
