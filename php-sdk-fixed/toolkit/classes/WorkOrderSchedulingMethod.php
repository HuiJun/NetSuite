<?php

class WorkOrderSchedulingMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _backward = "_backward";
	/**
	 * @var string
	 */
	const _forward = "_forward";
    public static function create()
    {
        return new static();
    }
}
