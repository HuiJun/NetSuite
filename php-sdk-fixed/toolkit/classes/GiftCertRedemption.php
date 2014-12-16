<?php

class GiftCertRedemption {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $authCode;
	/**
	 * @access public
	 * @var float
	 */
	public $authCodeApplied;
	/**
	 * @access public
	 * @var float
	 */
	public $authCodeAmtRemaining;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertAvailable;

	static $paramtypesmap = array(
		"authCode" => "RecordRef",
		"authCodeApplied" => "float",
		"authCodeAmtRemaining" => "float",
		"giftCertAvailable" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
