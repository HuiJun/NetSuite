<?php

class ItemFulfillment extends Record {
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
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var integer
	 */
	public $createdFromShipGroup;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var Address
	 */
	public $shippingAddress;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $pickedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $packedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $shippedDate;
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
	 * @var ItemFulfillmentShipStatus
	 */
	public $shipStatus;
	/**
	 * @access public
	 * @var boolean
	 */
	public $saturdayDeliveryUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendShipNotifyEmailUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendBackupEmailUps;
	/**
	 * @access public
	 * @var string
	 */
	public $shipNotifyEmailAddressUps;
	/**
	 * @access public
	 * @var string
	 */
	public $shipNotifyEmailAddress2Ups;
	/**
	 * @access public
	 * @var string
	 */
	public $backupEmailAddressUps;
	/**
	 * @access public
	 * @var string
	 */
	public $shipNotifyEmailMessageUps;
	/**
	 * @access public
	 * @var string
	 */
	public $thirdPartyAcctUps;
	/**
	 * @access public
	 * @var string
	 */
	public $thirdPartyZipcodeUps;
	/**
	 * @access public
	 * @var Country
	 */
	public $thirdPartyCountryUps;
	/**
	 * @access public
	 * @var ItemFulfillmentThirdPartyTypeUps
	 */
	public $thirdPartyTypeUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $partiesToTransactionUps;
	/**
	 * @access public
	 * @var ItemFulfillmentExportTypeUps
	 */
	public $exportTypeUps;
	/**
	 * @access public
	 * @var ItemFulfillmentMethodOfTransportUps
	 */
	public $methodOfTransportUps;
	/**
	 * @access public
	 * @var string
	 */
	public $carrierIdUps;
	/**
	 * @access public
	 * @var string
	 */
	public $entryNumberUps;
	/**
	 * @access public
	 * @var string
	 */
	public $inbondCodeUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isRoutedExportTransactionUps;
	/**
	 * @access public
	 * @var string
	 */
	public $licenseNumberUps;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $licenseDateUps;
	/**
	 * @access public
	 * @var ItemFulfillmentLicenseExceptionUps
	 */
	public $licenseExceptionUps;
	/**
	 * @access public
	 * @var string
	 */
	public $eccNumberUps;
	/**
	 * @access public
	 * @var string
	 */
	public $recipientTaxIdUps;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $blanketStartDateUps;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $blanketEndDateUps;
	/**
	 * @access public
	 * @var float
	 */
	public $shipmentWeightUps;
	/**
	 * @access public
	 * @var boolean
	 */
	public $saturdayDeliveryFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $saturdayPickupFedex;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendShipNotifyEmailFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendBackupEmailFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $signatureHomeDeliveryFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $shipNotifyEmailAddressFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $backupEmailAddressFedEx;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $shipDateFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentHomeDeliveryTypeFedEx
	 */
	public $homeDeliveryTypeFedEx;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $homeDeliveryDateFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $bookingConfirmationNumFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $intlExemptionNumFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentB13AFilingOptionFedEx
	 */
	public $b13aFilingOptionFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $b13aStatementDataFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $thirdPartyAcctFedEx;
	/**
	 * @access public
	 * @var Country
	 */
	public $thirdPartyCountryFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentThirdPartyTypeFedEx
	 */
	public $thirdPartyTypeFedEx;
	/**
	 * @access public
	 * @var float
	 */
	public $shipmentWeightFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentTermsOfSaleFedEx
	 */
	public $termsOfSaleFedEx;
	/**
	 * @access public
	 * @var float
	 */
	public $termsFreightChargeFedEx;
	/**
	 * @access public
	 * @var float
	 */
	public $termsInsuranceChargeFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $insideDeliveryFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $insidePickupFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentAncillaryEndorsementFedEx
	 */
	public $ancillaryEndorsementFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $holdAtLocationFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halPhoneFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halAddr1FedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halAddr2FedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halAddr3FedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halCityFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halZipFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halStateFedEx;
	/**
	 * @access public
	 * @var string
	 */
	public $halCountryFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentHazmatTypeFedEx
	 */
	public $hazmatTypeFedEx;
	/**
	 * @access public
	 * @var ItemFulfillmentAccessibilityTypeFedEx
	 */
	public $accessibilityTypeFedEx;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isCargoAircraftOnlyFedEx;
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
	 * @var RecordRef
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $generateIntegratedShipperLabel;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingCost;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transferLocation;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageList
	 */
	public $packageList;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageUpsList
	 */
	public $packageUpsList;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageUspsList
	 */
	public $packageUspsList;
	/**
	 * @access public
	 * @var ItemFulfillmentPackageFedExList
	 */
	public $packageFedExList;
	/**
	 * @access public
	 * @var ItemFulfillmentItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var ItemFulfillmentShipGroupList
	 */
	public $shipGroupList;
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
		"postingPeriod" => "RecordRef",
		"entity" => "RecordRef",
		"createdFrom" => "RecordRef",
		"createdFromShipGroup" => "integer",
		"partner" => "RecordRef",
		"shippingAddress" => "Address",
		"pickedDate" => "dateTime",
		"packedDate" => "dateTime",
		"shippedDate" => "dateTime",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"shipStatus" => "ItemFulfillmentShipStatus",
		"saturdayDeliveryUps" => "boolean",
		"sendShipNotifyEmailUps" => "boolean",
		"sendBackupEmailUps" => "boolean",
		"shipNotifyEmailAddressUps" => "string",
		"shipNotifyEmailAddress2Ups" => "string",
		"backupEmailAddressUps" => "string",
		"shipNotifyEmailMessageUps" => "string",
		"thirdPartyAcctUps" => "string",
		"thirdPartyZipcodeUps" => "string",
		"thirdPartyCountryUps" => "Country",
		"thirdPartyTypeUps" => "ItemFulfillmentThirdPartyTypeUps",
		"partiesToTransactionUps" => "boolean",
		"exportTypeUps" => "ItemFulfillmentExportTypeUps",
		"methodOfTransportUps" => "ItemFulfillmentMethodOfTransportUps",
		"carrierIdUps" => "string",
		"entryNumberUps" => "string",
		"inbondCodeUps" => "string",
		"isRoutedExportTransactionUps" => "boolean",
		"licenseNumberUps" => "string",
		"licenseDateUps" => "dateTime",
		"licenseExceptionUps" => "ItemFulfillmentLicenseExceptionUps",
		"eccNumberUps" => "string",
		"recipientTaxIdUps" => "string",
		"blanketStartDateUps" => "dateTime",
		"blanketEndDateUps" => "dateTime",
		"shipmentWeightUps" => "float",
		"saturdayDeliveryFedEx" => "boolean",
		"saturdayPickupFedex" => "boolean",
		"sendShipNotifyEmailFedEx" => "boolean",
		"sendBackupEmailFedEx" => "boolean",
		"signatureHomeDeliveryFedEx" => "boolean",
		"shipNotifyEmailAddressFedEx" => "string",
		"backupEmailAddressFedEx" => "string",
		"shipDateFedEx" => "dateTime",
		"homeDeliveryTypeFedEx" => "ItemFulfillmentHomeDeliveryTypeFedEx",
		"homeDeliveryDateFedEx" => "dateTime",
		"bookingConfirmationNumFedEx" => "string",
		"intlExemptionNumFedEx" => "string",
		"b13aFilingOptionFedEx" => "ItemFulfillmentB13AFilingOptionFedEx",
		"b13aStatementDataFedEx" => "string",
		"thirdPartyAcctFedEx" => "string",
		"thirdPartyCountryFedEx" => "Country",
		"thirdPartyTypeFedEx" => "ItemFulfillmentThirdPartyTypeFedEx",
		"shipmentWeightFedEx" => "float",
		"termsOfSaleFedEx" => "ItemFulfillmentTermsOfSaleFedEx",
		"termsFreightChargeFedEx" => "float",
		"termsInsuranceChargeFedEx" => "float",
		"insideDeliveryFedEx" => "boolean",
		"insidePickupFedEx" => "boolean",
		"ancillaryEndorsementFedEx" => "ItemFulfillmentAncillaryEndorsementFedEx",
		"holdAtLocationFedEx" => "boolean",
		"halPhoneFedEx" => "string",
		"halAddr1FedEx" => "string",
		"halAddr2FedEx" => "string",
		"halAddr3FedEx" => "string",
		"halCityFedEx" => "string",
		"halZipFedEx" => "string",
		"halStateFedEx" => "string",
		"halCountryFedEx" => "string",
		"hazmatTypeFedEx" => "ItemFulfillmentHazmatTypeFedEx",
		"accessibilityTypeFedEx" => "ItemFulfillmentAccessibilityTypeFedEx",
		"isCargoAircraftOnlyFedEx" => "boolean",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"shipMethod" => "RecordRef",
		"generateIntegratedShipperLabel" => "boolean",
		"shippingCost" => "float",
		"handlingCost" => "float",
		"memo" => "string",
		"transferLocation" => "RecordRef",
		"packageList" => "ItemFulfillmentPackageList",
		"packageUpsList" => "ItemFulfillmentPackageUpsList",
		"packageUspsList" => "ItemFulfillmentPackageUspsList",
		"packageFedExList" => "ItemFulfillmentPackageFedExList",
		"itemList" => "ItemFulfillmentItemList",
		"shipGroupList" => "ItemFulfillmentShipGroupList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
