<?php

class ItemSupplyType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _build = "_build";
	/**
	 * @var string
	 */
	const _purchase = "_purchase";
	/**
	 * @var string
	 */
	const _transfer = "_transfer";
    public static function create()
    {
        return new static();
    }
}
