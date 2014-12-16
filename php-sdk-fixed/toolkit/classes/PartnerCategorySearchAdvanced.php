<?php

class PartnerCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PartnerCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PartnerCategorySearchRow
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
		"criteria" => "PartnerCategorySearch",
		"columns" => "PartnerCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
