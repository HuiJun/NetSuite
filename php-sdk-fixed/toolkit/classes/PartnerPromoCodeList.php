<?php

class PartnerPromoCodeList {
	/**
	 * @access public
	 * @var PartnerPromoCode[]
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"promoCode" => "PartnerPromoCode[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
