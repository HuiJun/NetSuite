<?php

class ItemFulfillmentThirdPartyTypeFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _billRecipient = "_billRecipient";
	/**
	 * @var string
	 */
	const _billThirdParty = "_billThirdParty";
	/**
	 * @var string
	 */
	const _noneSelected = "_noneSelected";
    public static function create()
    {
        return new static();
    }
}
