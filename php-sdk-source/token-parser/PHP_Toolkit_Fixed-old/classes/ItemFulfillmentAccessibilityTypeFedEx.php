<?php

class ItemFulfillmentAccessibilityTypeFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _accessible = "_accessible";
	/**
	 * @var string
	 */
	const _inaccessible = "_inaccessible";
    public static function create()
    {
        return new static();
    }
}
