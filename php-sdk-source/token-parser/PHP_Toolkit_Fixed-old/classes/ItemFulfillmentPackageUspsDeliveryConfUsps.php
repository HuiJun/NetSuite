<?php

class ItemFulfillmentPackageUspsDeliveryConfUsps {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _deliveryConfirmation = "_deliveryConfirmation";
	/**
	 * @var string
	 */
	const _signatureConfirmation = "_signatureConfirmation";
    public static function create()
    {
        return new static();
    }
}
