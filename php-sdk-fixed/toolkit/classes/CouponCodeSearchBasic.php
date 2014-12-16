<?php

class CouponCodeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
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
	public $promotion;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $useCount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $used;

	static $paramtypesmap = array(
		"code" => "SearchStringField",
		"dateSent" => "SearchDateField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"promotion" => "SearchMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"useCount" => "SearchLongField",
		"used" => "SearchBooleanField",
	);
    public static function create()
    {
        return new static();
    }
}
