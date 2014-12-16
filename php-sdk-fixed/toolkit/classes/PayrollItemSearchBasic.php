<?php

class PayrollItemSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $itemTypeNoHierarchy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"expenseAccount" => "SearchMultiSelectField",
		"itemTypeNoHierarchy" => "SearchEnumMultiSelectField",
		"liabilityAccount" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"vendor" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
