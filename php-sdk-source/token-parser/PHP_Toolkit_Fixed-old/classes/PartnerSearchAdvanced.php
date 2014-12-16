<?php

class PartnerSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PartnerSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PartnerSearchRow
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
		"criteria" => "PartnerSearch",
		"columns" => "PartnerSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
