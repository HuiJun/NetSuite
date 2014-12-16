<?php

class ItemAccountingBookDetail {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sameAsPrimaryRevRec;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $amortizationTemplate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sameAsPrimaryAmortization;

	static $paramtypesmap = array(
		"accountingBook" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"sameAsPrimaryRevRec" => "boolean",
		"amortizationTemplate" => "RecordRef",
		"sameAsPrimaryAmortization" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
