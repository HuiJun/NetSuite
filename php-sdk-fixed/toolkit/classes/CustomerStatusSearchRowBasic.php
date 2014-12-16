<?php

class CustomerStatusSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $includeInLeadReports;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $probability;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"includeInLeadReports" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"probability" => "SearchColumnStringField[]",
	);
    public static function create()
    {
        return new static();
    }
}
