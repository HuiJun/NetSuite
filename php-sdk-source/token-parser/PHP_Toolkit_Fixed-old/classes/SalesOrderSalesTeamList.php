<?php

class SalesOrderSalesTeamList {
	/**
	 * @access public
	 * @var SalesOrderSalesTeam[]
	 */
	public $salesTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"salesTeam" => "SalesOrderSalesTeam[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
