<?php

class ItemProductFeed {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _googleBase = "_googleBase";
	/**
	 * @var string
	 */
	const _nexTag = "_nexTag";
	/**
	 * @var string
	 */
	const _shoppingCom = "_shoppingCom";
	/**
	 * @var string
	 */
	const _shopzilla = "_shopzilla";
	/**
	 * @var string
	 */
	const _yahooShopping = "_yahooShopping";
    public static function create()
    {
        return new static();
    }
}
