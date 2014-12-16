<?php

class ManufacturingLagType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _quantity = "_quantity";
	/**
	 * @var string
	 */
	const _quantityPercentage = "_quantityPercentage";
	/**
	 * @var string
	 */
	const _time = "_time";
	/**
	 * @var string
	 */
	const _timePercentage = "_timePercentage";
    public static function create()
    {
        return new static();
    }
}
