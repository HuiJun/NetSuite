<?php

class BillingScheduleRecurrenceRecurrenceUnits {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _custom = "_custom";
	/**
	 * @var string
	 */
	const _days = "_days";
	/**
	 * @var string
	 */
	const _months = "_months";
	/**
	 * @var string
	 */
	const _weeks = "_weeks";
    public static function create()
    {
        return new static();
    }
}
