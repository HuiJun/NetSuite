<?php

class ItemFulfillmentPackageFedExSignatureOptionsFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _adult = "_adult";
	/**
	 * @var string
	 */
	const _direct = "_direct";
	/**
	 * @var string
	 */
	const _indirect = "_indirect";
    public static function create()
    {
        return new static();
    }
}
