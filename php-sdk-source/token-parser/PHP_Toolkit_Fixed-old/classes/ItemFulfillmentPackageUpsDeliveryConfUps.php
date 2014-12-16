<?php

class ItemFulfillmentPackageUpsDeliveryConfUps {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _noneSelected = "_noneSelected";
	/**
	 * @var string
	 */
	const _adultSignatureRequired = "_adultSignatureRequired";
	/**
	 * @var string
	 */
	const _deliveryConfirmation = "_deliveryConfirmation";
	/**
	 * @var string
	 */
	const _signatureRequired = "_signatureRequired";
    public static function create()
    {
        return new static();
    }
}
