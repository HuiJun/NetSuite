<?php

class CustomerOtherRelationships {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _otherName = "_otherName";
	/**
	 * @var string
	 */
	const _partner = "_partner";
	/**
	 * @var string
	 */
	const _vendor = "_vendor";
    public static function create()
    {
        return new static();
    }
}
