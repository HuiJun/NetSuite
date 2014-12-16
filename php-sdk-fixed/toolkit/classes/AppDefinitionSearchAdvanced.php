<?php

class AppDefinitionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AppDefinitionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AppDefinitionSearchRow
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
		"criteria" => "AppDefinitionSearch",
		"columns" => "AppDefinitionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
