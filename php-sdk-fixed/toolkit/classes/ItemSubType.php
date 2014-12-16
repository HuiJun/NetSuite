<?php

class ItemSubType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _forPurchase = "_forPurchase";
	/**
	 * @var string
	 */
	const _forResale = "_forResale";
	/**
	 * @var string
	 */
	const _forSale = "_forSale";
    public static function create()
    {
        return new static();
    }
}
