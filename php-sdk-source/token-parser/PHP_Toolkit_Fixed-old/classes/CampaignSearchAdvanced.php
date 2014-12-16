<?php

class CampaignSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CampaignSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CampaignSearchRow
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
		"criteria" => "CampaignSearch",
		"columns" => "CampaignSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
