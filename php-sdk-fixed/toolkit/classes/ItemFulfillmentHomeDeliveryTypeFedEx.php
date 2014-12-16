<?php

class ItemFulfillmentHomeDeliveryTypeFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _appointment = "_appointment";
	/**
	 * @var string
	 */
	const _dateCertain = "_dateCertain";
	/**
	 * @var string
	 */
	const _evening = "_evening";
    public static function create()
    {
        return new static();
    }
}
