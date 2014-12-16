<?php

class SearchStringFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const contains = "contains";
	/**
	 * @var string
	 */
	const doesNotContain = "doesNotContain";
	/**
	 * @var string
	 */
	const doesNotStartWith = "doesNotStartWith";
	/**
	 * @var string
	 */
	const NSempty = "empty";
	/**
	 * @var string
	 */
	const hasKeywords = "hasKeywords";
	/**
	 * @var string
	 */
	const is = "is";
	/**
	 * @var string
	 */
	const isNot = "isNot";
	/**
	 * @var string
	 */
	const notEmpty = "notEmpty";
	/**
	 * @var string
	 */
	const startsWith = "startsWith";
    public static function create()
    {
        return new static();
    }
}
