<?php

class PartnerOtherRelationships {

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
	const _vendor = "_vendor";
    public static function create()
    {
        return new static();
    }
}
