<?php

class ItemOverheadType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _amountBaseUnit = "_amountBaseUnit";
	/**
	 * @var string
	 */
	const _percentOfMaterial = "_percentOfMaterial";
	/**
	 * @var string
	 */
	const _percentOfTotal = "_percentOfTotal";
    public static function create()
    {
        return new static();
    }
}
