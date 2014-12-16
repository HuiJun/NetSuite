<?php

class PromotionCodeApplyDiscountTo {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _allSales = "_allSales";
	/**
	 * @var string
	 */
	const _firstSaleOnly = "_firstSaleOnly";
    public static function create()
    {
        return new static();
    }
}
