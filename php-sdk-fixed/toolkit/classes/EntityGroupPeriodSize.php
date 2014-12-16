<?php

class EntityGroupPeriodSize {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _10minutes = "_10minutes";
	/**
	 * @var string
	 */
	const _15minutes = "_15minutes";
	/**
	 * @var string
	 */
	const _20minutes = "_20minutes";
	/**
	 * @var string
	 */
	const _30minutes = "_30minutes";
	/**
	 * @var string
	 */
	const _oneHour = "_oneHour";
    public static function create()
    {
        return new static();
    }
}
