<?php

class CouponCodeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CouponCodeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CouponCodeSearchRow
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
		"criteria" => "CouponCodeSearch",
		"columns" => "CouponCodeSearchRow",
		"savedSearchScriptId" => "string",
		"savedSearchId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
