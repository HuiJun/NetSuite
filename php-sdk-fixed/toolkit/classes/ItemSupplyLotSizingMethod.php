<?php

class ItemSupplyLotSizingMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fixedLotSize = "_fixedLotSize";
	/**
	 * @var string
	 */
	const _lotForLot = "_lotForLot";
	/**
	 * @var string
	 */
	const _periodsOfSupply = "_periodsOfSupply";
    public static function create()
    {
        return new static();
    }
}
