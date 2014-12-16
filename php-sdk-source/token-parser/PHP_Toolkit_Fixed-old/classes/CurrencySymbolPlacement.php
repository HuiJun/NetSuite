<?php

class CurrencySymbolPlacement {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _afterNumber = "_afterNumber";
	/**
	 * @var string
	 */
	const _beforeNumber = "_beforeNumber";
    public static function create()
    {
        return new static();
    }
}
