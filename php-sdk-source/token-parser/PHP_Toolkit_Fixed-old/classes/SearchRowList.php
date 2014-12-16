<?php

class SearchRowList {
	/**
	 * @access public
	 * @var SearchRow[]
	 */
	public $searchRow;

	static $paramtypesmap = array(
		"searchRow" => "SearchRow[]",
	);
    public static function create()
    {
        return new static();
    }
}
