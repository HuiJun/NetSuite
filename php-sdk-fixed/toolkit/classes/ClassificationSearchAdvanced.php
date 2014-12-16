<?php

class ClassificationSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ClassificationSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ClassificationSearchRow
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
		"criteria" => "ClassificationSearch",
		"columns" => "ClassificationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
