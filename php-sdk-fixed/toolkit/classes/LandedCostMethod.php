<?php

class LandedCostMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _quantity = "_quantity";
	/**
	 * @var string
	 */
	const _value = "_value";
	/**
	 * @var string
	 */
	const _weight = "_weight";
	/**
	 * @var string
	 */
	const _line = "_line";
    public static function create()
    {
        return new static();
    }
}
