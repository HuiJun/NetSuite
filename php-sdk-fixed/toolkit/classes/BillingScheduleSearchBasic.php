<?php

class BillingScheduleSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $applyToSubtotal;
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
	 * @var SearchEnumMultiSelectField
	 */
	public $frequency;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $inArrears;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $initialAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $initialTerms;
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
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $recurrenceCount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recurrenceTerms;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $repeatEvery;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;

	static $paramtypesmap = array(
		"applyToSubtotal" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"frequency" => "SearchEnumMultiSelectField",
		"inArrears" => "SearchBooleanField",
		"initialAmount" => "SearchDoubleField",
		"initialTerms" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isPublic" => "SearchBooleanField",
		"name" => "SearchStringField",
		"recurrenceCount" => "SearchLongField",
		"recurrenceTerms" => "SearchMultiSelectField",
		"repeatEvery" => "SearchLongField",
		"type" => "SearchEnumMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
