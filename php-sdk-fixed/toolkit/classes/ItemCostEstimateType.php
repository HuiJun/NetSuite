<?php

class ItemCostEstimateType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _averageCost = "_averageCost";
	/**
	 * @var string
	 */
	const _custom = "_custom";
	/**
	 * @var string
	 */
	const _derivedFromMemberItems = "_derivedFromMemberItems";
	/**
	 * @var string
	 */
	const _itemDefinedCost = "_itemDefinedCost";
	/**
	 * @var string
	 */
	const _lastPurchasePrice = "_lastPurchasePrice";
	/**
	 * @var string
	 */
	const _preferredVendorRate = "_preferredVendorRate";
	/**
	 * @var string
	 */
	const _purchaseOrderRate = "_purchaseOrderRate";
	/**
	 * @var string
	 */
	const _purchasePrice = "_purchasePrice";
    public static function create()
    {
        return new static();
    }
}
