<?php

class OpportunityCompetitorsList {
	/**
	 * @access public
	 * @var OpportunityCompetitors[]
	 */
	public $competitors;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"competitors" => "OpportunityCompetitors[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
