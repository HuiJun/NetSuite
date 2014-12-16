<?php

class ItemRevisionSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $effectiveDate;
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
	public $item;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $obsoleteDate;

	static $paramtypesmap = array(
		"effectiveDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"obsoleteDate" => "SearchDateField",
	);
    public static function create()
    {
        return new static();
    }
}
