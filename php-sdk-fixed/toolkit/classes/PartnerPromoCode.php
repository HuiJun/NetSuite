<?php

class PartnerPromoCode {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var string
	 */
	public $discount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;

	static $paramtypesmap = array(
		"promoCode" => "RecordRef",
		"discount" => "string",
		"endDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
