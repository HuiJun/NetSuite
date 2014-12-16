<?php

class Partners {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrimary;
	/**
	 * @access public
	 * @var float
	 */
	public $contribution;

	static $paramtypesmap = array(
		"partner" => "RecordRef",
		"partnerRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
