<?php

class ItemFulfillmentPackageFedExCodMethodFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _any = "_any";
	/**
	 * @var string
	 */
	const _cash = "_cash";
	/**
	 * @var string
	 */
	const _guaranteedFunds = "_guaranteedFunds";
    public static function create()
    {
        return new static();
    }
}
