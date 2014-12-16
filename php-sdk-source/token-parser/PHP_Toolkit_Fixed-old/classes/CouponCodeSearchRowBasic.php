<?php

class CouponCodeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $promotion;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $useCount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $used;

	static $paramtypesmap = array(
		"code" => "SearchColumnStringField[]",
		"dateSent" => "SearchColumnDateField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"promotion" => "SearchColumnStringField[]",
		"recipient" => "SearchColumnStringField[]",
		"useCount" => "SearchColumnLongField[]",
		"used" => "SearchColumnBooleanField[]",
	);
    public static function create()
    {
        return new static();
    }
}
