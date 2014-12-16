<?php

class GetSelectValueFilterOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const contains = "contains";
	/**
	 * @var string
	 */
	const is = "is";
	/**
	 * @var string
	 */
	const startsWith = "startsWith";
    public static function create()
    {
        return new static();
    }
}
