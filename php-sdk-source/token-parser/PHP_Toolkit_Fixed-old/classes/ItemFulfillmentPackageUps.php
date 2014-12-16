<?php

class ItemFulfillmentPackageUps {
	/**
	 * @access public
	 * @var float
	 */
	public $packageWeightUps;
	/**
	 * @access public
	 * @var string
	 */
	public $packageDescrUps;
	/**
	 * @access public
	 * @var string
	 */
	public $packageTrackingNumberUps;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageUpsPackagingUps
	 */
	public $packagingUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useInsuredValueUps;
	/**
	 * @access public
	 * @var float
	 */
	public $insuredValueUps;
	/**
	 * @access public
	 * @var string
	 */
	public $reference1Ups;
	/**
	 * @access public
	 * @var string
	 */
	public $reference2Ups;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageLengthUps;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageWidthUps;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageHeightUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $additionalHandlingUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useCodUps;
	/**
	 * @access public
	 * @var float
	 */
	public $codAmountUps;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageUpsCodMethodUps
	 */
	public $codMethodUps;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageUpsDeliveryConfUps
	 */
	public $deliveryConfUps;

	static $paramtypesmap = array(
		"packageWeightUps" => "float",
		"packageDescrUps" => "string",
		"packageTrackingNumberUps" => "string",
		"packagingUps" => "ItemFulfillmentPackageUpsPackagingUps",
		"useInsuredValueUps" => "boolean",
		"insuredValueUps" => "float",
		"reference1Ups" => "string",
		"reference2Ups" => "string",
		"packageLengthUps" => "integer",
		"packageWidthUps" => "integer",
		"packageHeightUps" => "integer",
		"additionalHandlingUps" => "boolean",
		"useCodUps" => "boolean",
		"codAmountUps" => "float",
		"codMethodUps" => "ItemFulfillmentPackageUpsCodMethodUps",
		"deliveryConfUps" => "ItemFulfillmentPackageUpsDeliveryConfUps",
	);
    public static function create()
    {
        return new static();
    }
}
