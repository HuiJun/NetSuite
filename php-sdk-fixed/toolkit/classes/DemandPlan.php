<?php

class DemandPlan {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var float
	 */
	public $calculatedQuantity;
	/**
	 * @access public
	 * @var PeriodDemandPlanList
	 */
	public $periodDemandPlanList;

	static $paramtypesmap = array(
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"calculatedQuantity" => "float",
		"periodDemandPlanList" => "PeriodDemandPlanList",
	);
    public static function create()
    {
        return new static();
    }
}
