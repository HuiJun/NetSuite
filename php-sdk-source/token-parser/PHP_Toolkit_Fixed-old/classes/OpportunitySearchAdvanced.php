<?php

class OpportunitySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var OpportunitySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var OpportunitySearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "OpportunitySearch",
		"columns" => "OpportunitySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
