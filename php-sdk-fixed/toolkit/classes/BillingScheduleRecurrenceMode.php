<?php

class BillingScheduleRecurrenceMode {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _dom = "_dom";
	/**
	 * @var string
	 */
	const _dowim = "_dowim";
    public static function create()
    {
        return new static();
    }
}
