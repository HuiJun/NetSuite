<?php

class DemandPlanMatrix {
	/**
	 * @access public
	 * @var DemandPlan[]
	 */
	public $demandPlan;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"demandPlan" => "DemandPlan[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
