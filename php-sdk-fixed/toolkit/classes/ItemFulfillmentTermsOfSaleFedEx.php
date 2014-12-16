<?php

class ItemFulfillmentTermsOfSaleFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fob = "_fob";
	/**
	 * @var string
	 */
	const _cf = "_cf";
	/**
	 * @var string
	 */
	const _cif = "_cif";
    public static function create()
    {
        return new static();
    }
}
