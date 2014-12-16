<?php

class ItemSupplyPlanOrderType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _purchaseOrder = "_purchaseOrder";
	/**
	 * @var string
	 */
	const _transferOrder = "_transferOrder";
	/**
	 * @var string
	 */
	const _workOrder = "_workOrder";
    public static function create()
    {
        return new static();
    }
}
