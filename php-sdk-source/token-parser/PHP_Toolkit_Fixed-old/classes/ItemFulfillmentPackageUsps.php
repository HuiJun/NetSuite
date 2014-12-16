<?php

class ItemFulfillmentPackageUsps {
	/**
	 * @access public
	 * @var float
	 */
	public $packageWeightUsps;
	/**
	 * @access public
	 * @var string
	 */
	public $packageDescrUsps;
	/**
	 * @access public
	 * @var string
	 */
	public $packageTrackingNumberUsps;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageUspsPackagingUsps
	 */
	public $packagingUsps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useInsuredValueUsps;
	/**
	 * @access public
	 * @var float
	 */
	public $insuredValueUsps;
	/**
	 * @access public
	 * @var string
	 */
	public $reference1Usps;
	/**
	 * @access public
	 * @var string
	 */
	public $reference2Usps;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageLengthUsps;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageWidthUsps;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageHeightUsps;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageUspsDeliveryConfUsps
	 */
	public $deliveryConfUsps;

	static $paramtypesmap = array(
		"packageWeightUsps" => "float",
		"packageDescrUsps" => "string",
		"packageTrackingNumberUsps" => "string",
		"packagingUsps" => "ItemFulfillmentPackageUspsPackagingUsps",
		"useInsuredValueUsps" => "boolean",
		"insuredValueUsps" => "float",
		"reference1Usps" => "string",
		"reference2Usps" => "string",
		"packageLengthUsps" => "integer",
		"packageWidthUsps" => "integer",
		"packageHeightUsps" => "integer",
		"deliveryConfUsps" => "ItemFulfillmentPackageUspsDeliveryConfUsps",
	);
    public static function create()
    {
        return new static();
    }
}
