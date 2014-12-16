<?php

class VendorCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
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
	 * @var SearchColumnBooleanField[]
	 */
	public $isTaxAgency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isTaxAgency" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
    public static function create()
    {
        return new static();
    }
}
