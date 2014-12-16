<?php

class CustomerCreditHoldOverride {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _auto = "_auto";
	/**
	 * @var string
	 */
	const _on = "_on";
	/**
	 * @var string
	 */
	const _off = "_off";
    public static function create()
    {
        return new static();
    }
}
