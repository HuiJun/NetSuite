<?php

class SalesOrderItemCreatePo {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _dropShipment = "_dropShipment";
	/**
	 * @var string
	 */
	const _specialOrder = "_specialOrder";
    public static function create()
    {
        return new static();
    }
}
