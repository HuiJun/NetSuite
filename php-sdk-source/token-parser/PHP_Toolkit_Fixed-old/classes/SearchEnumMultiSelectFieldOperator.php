<?php

class SearchEnumMultiSelectFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const anyOf = "anyOf";
	/**
	 * @var string
	 */
	const noneOf = "noneOf";
    public static function create()
    {
        return new static();
    }
}
