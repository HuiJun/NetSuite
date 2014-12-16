<?php

class PeriodDemandPlanList {
	/**
	 * @access public
	 * @var PeriodDemandPlan[]
	 */
	public $periodDemandPlan;

	static $paramtypesmap = array(
		"periodDemandPlan" => "PeriodDemandPlan[]",
	);
    public static function create()
    {
        return new static();
    }
}
