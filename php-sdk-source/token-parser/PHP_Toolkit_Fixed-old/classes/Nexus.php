<?php

class Nexus extends Record {
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $state;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxAgency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxAgencyPst;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"country" => "Country",
		"state" => "RecordRef",
		"taxAgency" => "RecordRef",
		"taxAgencyPst" => "RecordRef",
		"taxCode" => "RecordRef",
		"description" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
