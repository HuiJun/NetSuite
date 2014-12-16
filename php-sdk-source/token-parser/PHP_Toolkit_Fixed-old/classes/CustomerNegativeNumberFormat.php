<?php

class CustomerNegativeNumberFormat {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _bracketSurrounded = "_bracketSurrounded";
	/**
	 * @var string
	 */
	const _minusSigned = "_minusSigned";
    public static function create()
    {
        return new static();
    }
}
