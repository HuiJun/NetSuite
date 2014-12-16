<?php

class SubsidiaryNexus {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexusId;
	/**
	 * @access public
	 * @var string
	 */
	public $country;

	static $paramtypesmap = array(
		"nexusId" => "RecordRef",
		"country" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
