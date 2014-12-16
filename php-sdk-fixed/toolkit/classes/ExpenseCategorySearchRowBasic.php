<?php

class ExpenseCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $account;
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
	 * @var SearchColumnBooleanField[]
	 */
	public $rateRequired;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"rateRequired" => "SearchColumnBooleanField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
