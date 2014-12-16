<?php

class ItemOverallQuantityPricingType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _byLineQuantity = "_byLineQuantity";
	/**
	 * @var string
	 */
	const _byOverallItemQuantity = "_byOverallItemQuantity";
	/**
	 * @var string
	 */
	const _byOverallParentQuantity = "_byOverallParentQuantity";
	/**
	 * @var string
	 */
	const _byOverallScheduleQuantity = "_byOverallScheduleQuantity";
    public static function create()
    {
        return new static();
    }
}
