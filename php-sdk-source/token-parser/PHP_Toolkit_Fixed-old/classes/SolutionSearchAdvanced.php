<?php

class SolutionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SolutionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SolutionSearchRow
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
		"criteria" => "SolutionSearch",
		"columns" => "SolutionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
