<?php

class TimeBillTimeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _actualTime = "_actualTime";
	/**
	 * @var string
	 */
	const _allocatedTime = "_allocatedTime";
	/**
	 * @var string
	 */
	const _plannedTime = "_plannedTime";
    public static function create()
    {
        return new static();
    }
}
