<?php

class BinSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $inactive;
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
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"binNumber" => "SearchStringField",
		"inactive" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
