<?php

class ItemSupplyReplenishmentMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _reorderPoint = "_reorderPoint";
	/**
	 * @var string
	 */
	const _timePhased = "_timePhased";
    public static function create()
    {
        return new static();
    }
}
