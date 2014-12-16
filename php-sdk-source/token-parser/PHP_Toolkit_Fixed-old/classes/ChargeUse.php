<?php

class ChargeUse {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _actual = "_actual";
	/**
	 * @var string
	 */
	const _forecast = "_forecast";
    public static function create()
    {
        return new static();
    }
}
