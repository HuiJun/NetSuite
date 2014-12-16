<?php

class ItemFulfillmentPackageFedExPriorityAlertTypeFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fedexPriorityAlert = "_fedexPriorityAlert";
	/**
	 * @var string
	 */
	const _fedexPriorityAlertPlus = "_fedexPriorityAlertPlus";
	/**
	 * @var string
	 */
	const _noneSelected = "_noneSelected";
    public static function create()
    {
        return new static();
    }
}
