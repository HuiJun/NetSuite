<?php

class GetSelectValueResult {
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
	 * @var integer
	 */
	public $totalPages;
	/**
	 * @access public
	 * @var BaseRefList
	 */
	public $baseRefList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"totalPages" => "integer",
		"baseRefList" => "BaseRefList",
	);
    public static function create()
    {
        return new static();
    }
}
