<?php

class SalesTaxItemAvailable {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _both = "_both";
	/**
	 * @var string
	 */
	const _purchase = "_purchase";
	/**
	 * @var string
	 */
	const _sale = "_sale";
    public static function create()
    {
        return new static();
    }
}
