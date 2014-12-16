<?php

class EmployeeAccruedTimeAccrualMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _lumpSums = "_lumpSums";
	/**
	 * @var string
	 */
	const _perHourWorked = "_perHourWorked";
	/**
	 * @var string
	 */
	const _perPayPeriod = "_perPayPeriod";
    public static function create()
    {
        return new static();
    }
}
