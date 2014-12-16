<?php

class VendorOtherRelationships {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _customer = "_customer";
	/**
	 * @var string
	 */
	const _otherName = "_otherName";
	/**
	 * @var string
	 */
	const _partner = "_partner";
    public static function create()
    {
        return new static();
    }
}
