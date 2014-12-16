<?php

class EmployeeUseTimeData {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _wage = "_wage";
	/**
	 * @var string
	 */
	const _salary = "_salary";
    public static function create()
    {
        return new static();
    }
}
