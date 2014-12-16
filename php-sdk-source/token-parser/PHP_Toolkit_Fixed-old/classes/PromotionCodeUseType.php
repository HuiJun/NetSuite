<?php

class PromotionCodeUseType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _multipleUses = "_multipleUses";
	/**
	 * @var string
	 */
	const _singleUse = "_singleUse";
    public static function create()
    {
        return new static();
    }
}
