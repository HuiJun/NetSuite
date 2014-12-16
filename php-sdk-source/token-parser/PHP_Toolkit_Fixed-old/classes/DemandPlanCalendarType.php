<?php

class DemandPlanCalendarType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _daily = "_daily";
	/**
	 * @var string
	 */
	const _monthly = "_monthly";
	/**
	 * @var string
	 */
	const _weekly = "_weekly";
    public static function create()
    {
        return new static();
    }
}
