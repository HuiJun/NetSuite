<?php

class ItemFulfillmentPackageFedEx {
	/**
	 * @access public
	 * @var float
	 */
	public $packageWeightFedEx;
	/**
	 * @access public
	 * @var float
	 */
	public $dryIceWeightFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $packageTrackingNumberFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExPackagingFedEx
	 */
	public $packagingFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExAdmPackageTypeFedEx
	 */
	public $admPackageTypeFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isNonStandardContainerFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isAlcoholFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isNonHazLithiumFedEx;
	/**
	 * @access public
	 * @var float
	 */
	public $insuredValueFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useInsuredValueFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $reference1FedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
	 */
	public $priorityAlertTypeFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $priorityAlertContentFedEx;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageLengthFedEx;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageWidthFedEx;
	/**
	 * @access public
	 * @var integer
	 */
	public $packageHeightFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useCodFedEx;
	/**
	 * @access public
	 * @var float
	 */
	public $codAmountFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExCodMethodFedEx
	 */
	public $codMethodFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExCodFreightTypeFedEx
	 */
	public $codFreightTypeFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExDeliveryConfFedEx
	 */
	public $deliveryConfFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExSignatureOptionsFedEx
	 */
	public $signatureOptionsFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $signatureReleaseFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $authorizationNumberFedEx;

	static $paramtypesmap = array(
		"packageWeightFedEx" => "float",
		"dryIceWeightFedEx" => "float",
		"packageTrackingNumberFedEx" => "string",
		"packagingFedEx" => "ItemFulfillmentPackageFedExPackagingFedEx",
		"admPackageTypeFedEx" => "ItemFulfillmentPackageFedExAdmPackageTypeFedEx",
		"isNonStandardContainerFedEx" => "boolean",
		"isAlcoholFedEx" => "boolean",
		"isNonHazLithiumFedEx" => "boolean",
		"insuredValueFedEx" => "float",
		"useInsuredValueFedEx" => "boolean",
		"reference1FedEx" => "string",
		"priorityAlertTypeFedEx" => "ItemFulfillmentPackageFedExPriorityAlertTypeFedEx",
		"priorityAlertContentFedEx" => "string",
		"packageLengthFedEx" => "integer",
		"packageWidthFedEx" => "integer",
		"packageHeightFedEx" => "integer",
		"useCodFedEx" => "boolean",
		"codAmountFedEx" => "float",
		"codMethodFedEx" => "ItemFulfillmentPackageFedExCodMethodFedEx",
		"codFreightTypeFedEx" => "ItemFulfillmentPackageFedExCodFreightTypeFedEx",
		"deliveryConfFedEx" => "ItemFulfillmentPackageFedExDeliveryConfFedEx",
		"signatureOptionsFedEx" => "ItemFulfillmentPackageFedExSignatureOptionsFedEx",
		"signatureReleaseFedEx" => "string",
		"authorizationNumberFedEx" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
