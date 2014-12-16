<?php

class PartnerInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $partnerId;

	static $paramtypesmap = array(
		"partnerId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
