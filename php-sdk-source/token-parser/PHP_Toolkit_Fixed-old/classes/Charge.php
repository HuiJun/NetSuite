<?php

class Charge extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesOrder;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billTo;
	/**
	 * @access public
	 * @var ChargeStage
	 */
	public $stage;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $chargeDate;
	/**
	 * @access public
	 * @var ChargeUse
	 */
	public $use;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $projectTask;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeRecord;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billingItem;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transactionLine;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesOrderLine;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $invoice;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $invoiceLine;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $rule;
	/**
	 * @access public
	 * @var string
	 */
	public $runId;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"salesOrder" => "RecordRef",
		"billTo" => "RecordRef",
		"stage" => "ChargeStage",
		"chargeDate" => "dateTime",
		"use" => "ChargeUse",
		"chargeType" => "RecordRef",
		"projectTask" => "RecordRef",
		"description" => "string",
		"createdDate" => "dateTime",
		"timeRecord" => "RecordRef",
		"rate" => "string",
		"quantity" => "float",
		"amount" => "float",
		"billingItem" => "RecordRef",
		"currency" => "RecordRef",
		"transaction" => "RecordRef",
		"transactionLine" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"salesOrderLine" => "RecordRef",
		"invoice" => "RecordRef",
		"invoiceLine" => "RecordRef",
		"rule" => "RecordRef",
		"runId" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
