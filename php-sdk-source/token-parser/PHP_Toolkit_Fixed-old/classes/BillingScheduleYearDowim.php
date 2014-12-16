<?php

class BillingScheduleYearDowim {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _first = "_first";
	/**
	 * @var string
	 */
	const _second = "_second";
	/**
	 * @var string
	 */
	const _third = "_third";
	/**
	 * @var string
	 */
	const _fourth = "_fourth";
	/**
	 * @var string
	 */
	const _last = "_last";
    public static function create()
    {
        return new static();
    }
}
