<?php

class ReturnAuthorizationSalesTeamList {
	/**
	 * @access public
	 * @var ReturnAuthorizationSalesTeam[]
	 */
	public $salesTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"salesTeam" => "ReturnAuthorizationSalesTeam[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
