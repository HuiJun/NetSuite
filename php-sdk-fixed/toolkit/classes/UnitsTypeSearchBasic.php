<?php

class UnitsTypeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $baseUnit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $conversionRate;
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
	 * @var SearchBooleanField
	 */
	public $isInActive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pluralAbbreviation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pluralName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $unitName;

	static $paramtypesmap = array(
		"abbreviation" => "SearchStringField",
		"baseUnit" => "SearchBooleanField",
		"conversionRate" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInActive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"pluralAbbreviation" => "SearchStringField",
		"pluralName" => "SearchStringField",
		"unitName" => "SearchStringField",
	);
    public static function create()
    {
        return new static();
    }
}
