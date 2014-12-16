<?php

class CashSaleSalesTeam {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrimary;
	/**
	 * @access public
	 * @var float
	 */
	public $contribution;

	static $paramtypesmap = array(
		"employee" => "RecordRef",
		"salesRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
