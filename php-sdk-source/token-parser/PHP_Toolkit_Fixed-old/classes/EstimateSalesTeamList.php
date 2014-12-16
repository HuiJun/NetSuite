<?php

class EstimateSalesTeamList {
	/**
	 * @access public
	 * @var EstimateSalesTeam[]
	 */
	public $salesTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"salesTeam" => "EstimateSalesTeam[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
