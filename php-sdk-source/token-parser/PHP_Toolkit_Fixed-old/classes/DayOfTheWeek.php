<?php

class DayOfTheWeek {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _sunday = "_sunday";
	/**
	 * @var string
	 */
	const _monday = "_monday";
	/**
	 * @var string
	 */
	const _tuesday = "_tuesday";
	/**
	 * @var string
	 */
	const _wednesday = "_wednesday";
	/**
	 * @var string
	 */
	const _thursday = "_thursday";
	/**
	 * @var string
	 */
	const _friday = "_friday";
	/**
	 * @var string
	 */
	const _saturday = "_saturday";
    public static function create()
    {
        return new static();
    }
}
