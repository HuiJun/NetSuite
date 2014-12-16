<?php

class ItemFulfillmentThirdPartyTypeUps {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _consigneeBilling = "_consigneeBilling";
	/**
	 * @var string
	 */
	const _noneSelected = "_noneSelected";
	/**
	 * @var string
	 */
	const _thirdPartyBilling = "_thirdPartyBilling";
    public static function create()
    {
        return new static();
    }
}
