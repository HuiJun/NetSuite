<?php

class TaxAcctType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _sale = "_sale";
	/**
	 * @var string
	 */
	const _purchase = "_purchase";
    public static function create()
    {
        return new static();
    }
}
