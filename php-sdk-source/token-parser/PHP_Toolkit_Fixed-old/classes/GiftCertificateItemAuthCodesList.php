<?php

class GiftCertificateItemAuthCodesList {
	/**
	 * @access public
	 * @var GiftCertificateItemAuthCodes[]
	 */
	public $authCodes;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"authCodes" => "GiftCertificateItemAuthCodes[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
