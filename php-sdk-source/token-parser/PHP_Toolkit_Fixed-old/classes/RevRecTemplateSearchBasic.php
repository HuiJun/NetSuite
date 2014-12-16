<?php

class RevRecTemplateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorMethod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $amorPeriod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $amorStartOffset;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorTermSrc;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contraAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $deferralAccount;
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
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $targetAccount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"amorMethod" => "SearchEnumMultiSelectField",
		"amorPeriod" => "SearchLongField",
		"amorStartOffset" => "SearchLongField",
		"amorTermSrc" => "SearchEnumMultiSelectField",
		"amorType" => "SearchEnumMultiSelectField",
		"contraAccount" => "SearchMultiSelectField",
		"deferralAccount" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"periodOffset" => "SearchLongField",
		"targetAccount" => "SearchMultiSelectField",
		"useForeignAmounts" => "SearchBooleanField",
	);
    public static function create()
    {
        return new static();
    }
}
