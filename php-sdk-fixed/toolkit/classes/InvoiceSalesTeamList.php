<?php

class InvoiceSalesTeamList {
	/**
	 * @access public
	 * @var InvoiceSalesTeam[]
	 */
	public $salesTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"salesTeam" => "InvoiceSalesTeam[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
