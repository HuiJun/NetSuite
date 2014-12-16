<?php

class PeriodicLotSizeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _interval = "_interval";
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
