<?php

class ItemFulfillmentShipStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _packed = "_packed";
	/**
	 * @var string
	 */
	const _picked = "_picked";
	/**
	 * @var string
	 */
	const _shipped = "_shipped";
    public static function create()
    {
        return new static();
    }
}
