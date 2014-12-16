<?php

class BillingScheduleRecurrenceList {
	/**
	 * @access public
	 * @var BillingScheduleRecurrence[]
	 */
	public $billingScheduleRecurrence;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"billingScheduleRecurrence" => "BillingScheduleRecurrence[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
