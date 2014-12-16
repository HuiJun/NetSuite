<?php

class ItemFulfillmentExportTypeUps {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _domesticExports = "_domesticExports";
	/**
	 * @var string
	 */
	const _foreignExports = "_foreignExports";
	/**
	 * @var string
	 */
	const _foreignMilitarySales = "_foreignMilitarySales";
    public static function create()
    {
        return new static();
    }
}
