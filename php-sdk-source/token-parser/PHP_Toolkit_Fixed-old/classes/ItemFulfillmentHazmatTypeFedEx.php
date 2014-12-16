<?php

class ItemFulfillmentHazmatTypeFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _dangerousGoods = "_dangerousGoods";
	/**
	 * @var string
	 */
	const _hazmat = "_hazmat";
    public static function create()
    {
        return new static();
    }
}
