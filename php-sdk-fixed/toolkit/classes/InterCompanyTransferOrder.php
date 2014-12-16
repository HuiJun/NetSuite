<?php

class InterCompanyTransferOrder extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $subTotal;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var Address
	 */
	public $shippingAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $shipIsResidential;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipAddressList;
	/**
	 * @access public
	 * @var string
	 */
	public $fob;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var string
	 */
	public $source;
	/**
	 * @access public
	 * @var TransferOrderOrderStatus
	 */
	public $orderStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transferLocation;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $shipDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var string
	 */
	public $trackingNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $linkedTrackingNumbers;
	/**
	 * @access public
	 * @var boolean
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var float
	 */
	public $altShippingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingTax1Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingTax1Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingTax2Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingTax2Rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shippingTaxCode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $handlingTaxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var InterCompanyTransferOrderItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"shippingCost" => "float",
		"subTotal" => "float",
		"status" => "string",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"orderStatus" => "TransferOrderOrderStatus",
		"subsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
		"employee" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"transferLocation" => "RecordRef",
		"memo" => "string",
		"shipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"trackingNumbers" => "string",
		"linkedTrackingNumbers" => "string",
		"shipComplete" => "boolean",
		"altShippingCost" => "float",
		"shippingTax1Rate" => "float",
		"handlingTax1Rate" => "float",
		"shippingTax2Rate" => "float",
		"handlingTax2Rate" => "float",
		"shippingTaxCode" => "RecordRef",
		"handlingTaxCode" => "RecordRef",
		"total" => "float",
		"itemList" => "InterCompanyTransferOrderItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
