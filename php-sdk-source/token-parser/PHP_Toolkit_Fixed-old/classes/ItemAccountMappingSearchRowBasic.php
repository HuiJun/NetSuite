<?php

class ItemAccountMappingSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnSelectCustomField[]
	 */
	public $customDimension;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $destinationAccount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $itemAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $sourceAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnSelectField[]",
		"class" => "SearchColumnSelectField[]",
		"customDimension" => "SearchColumnSelectCustomField[]",
		"department" => "SearchColumnSelectField[]",
		"destinationAccount" => "SearchColumnSelectField[]",
		"effectiveDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"itemAccount" => "SearchColumnEnumSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"sourceAccount" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
