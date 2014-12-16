<?php

class TimeItemTimeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _actualTime = "_actualTime";
	/**
	 * @var string
	 */
	const _plannedTime = "_plannedTime";
    public static function create()
    {
        return new static();
    }
}
