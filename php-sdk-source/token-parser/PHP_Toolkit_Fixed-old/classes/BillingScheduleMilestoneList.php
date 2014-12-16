<?php

class BillingScheduleMilestoneList {
	/**
	 * @access public
	 * @var BillingScheduleMilestone[]
	 */
	public $billingScheduleMilestone;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"billingScheduleMilestone" => "BillingScheduleMilestone[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
