<?php

class ItemFulfillmentPackageUpsPackagingUps {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _upsExpressBox = "_upsExpressBox";
	/**
	 * @var string
	 */
	const _upsLetter = "_upsLetter";
	/**
	 * @var string
	 */
	const _upsPak = "_upsPak";
	/**
	 * @var string
	 */
	const _upsTube = "_upsTube";
	/**
	 * @var string
	 */
	const _yourPackaging = "_yourPackaging";
    public static function create()
    {
        return new static();
    }
}
