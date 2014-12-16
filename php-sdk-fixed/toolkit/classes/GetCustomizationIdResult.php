<?php

class GetCustomizationIdResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var CustomizationRefList
	 */
	public $customizationRefList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"customizationRefList" => "CustomizationRefList",
	);
    public static function create()
    {
        return new static();
    }
}
