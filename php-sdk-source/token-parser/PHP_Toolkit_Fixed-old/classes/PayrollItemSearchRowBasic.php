<?php

class PayrollItemSearchRowBasic extends SearchRowBasic {
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
	 * @var SearchColumnStringField[]
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemTypeNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"expenseAccount" => "SearchColumnStringField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"itemTypeNoHierarchy" => "SearchColumnStringField[]",
		"liabilityAccount" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"vendor" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
