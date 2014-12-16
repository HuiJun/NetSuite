<?php

class SubsidiarySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SubsidiarySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SubsidiarySearchRow
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
		"criteria" => "SubsidiarySearch",
		"columns" => "SubsidiarySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
