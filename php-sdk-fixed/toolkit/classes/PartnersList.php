<?php

class PartnersList {
	/**
	 * @access public
	 * @var Partners[]
	 */
	public $partners;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"partners" => "Partners[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
