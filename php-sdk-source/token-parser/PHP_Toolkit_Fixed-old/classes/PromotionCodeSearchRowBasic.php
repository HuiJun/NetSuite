<?php

class PromotionCodeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $discount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
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
	 * @var SearchColumnBooleanField[]
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"code" => "SearchColumnStringField[]",
		"description" => "SearchColumnStringField[]",
		"discount" => "SearchColumnStringField[]",
		"discountAmount" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPublic" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
