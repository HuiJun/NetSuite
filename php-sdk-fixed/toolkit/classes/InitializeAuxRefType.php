<?php

class InitializeAuxRefType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const shippingGroup = "shippingGroup";
	/**
	 * @var string
	 */
	const arAccount = "arAccount";
	/**
	 * @var string
	 */
	const apAccount = "apAccount";
    public static function create()
    {
        return new static();
    }
}
