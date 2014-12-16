<?php

class ItemWeightUnit {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _g = "_g";
	/**
	 * @var string
	 */
	const _kg = "_kg";
	/**
	 * @var string
	 */
	const _lb = "_lb";
	/**
	 * @var string
	 */
	const _oz = "_oz";
    public static function create()
    {
        return new static();
    }
}
