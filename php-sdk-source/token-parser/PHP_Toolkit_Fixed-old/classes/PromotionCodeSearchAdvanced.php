<?php

class PromotionCodeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PromotionCodeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PromotionCodeSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;

	static $paramtypesmap = array(
		"criteria" => "PromotionCodeSearch",
		"columns" => "PromotionCodeSearchRow",
		"savedSearchScriptId" => "string",
		"savedSearchId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
