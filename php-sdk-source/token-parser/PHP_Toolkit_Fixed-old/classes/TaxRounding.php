<?php

class TaxRounding {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _roundDown = "_roundDown";
	/**
	 * @var string
	 */
	const _roundOff = "_roundOff";
	/**
	 * @var string
	 */
	const _roundUp = "_roundUp";
    public static function create()
    {
        return new static();
    }
}
