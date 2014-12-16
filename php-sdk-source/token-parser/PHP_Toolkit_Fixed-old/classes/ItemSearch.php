<?php

class ItemSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BinSearchBasic
	 */
	public $binNumberJoin;
	/**
	 * @access public
	 * @var ItemBinNumberSearchBasic
	 */
	public $binOnHandJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $correlatedItemJoin;
	/**
	 * @access public
	 * @var ItemRevisionSearchBasic
	 */
	public $effectiveRevisionJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var InventoryDetailSearchBasic
	 */
	public $inventoryDetailJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $inventoryLocationJoin;
	/**
	 * @access public
	 * @var InventoryNumberSearchBasic
	 */
	public $inventoryNumberJoin;
	/**
	 * @access public
	 * @var InventoryNumberBinSearchBasic
	 */
	public $inventoryNumberBinOnHandJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $memberItemJoin;
	/**
	 * @access public
	 * @var ItemRevisionSearchBasic
	 */
	public $obsoleteRevisionJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $parentJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $preferredLocationJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $preferredVendorJoin;
	/**
	 * @access public
	 * @var PricingSearchBasic
	 */
	public $pricingJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $shopperJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ItemSearchBasic",
		"binNumberJoin" => "BinSearchBasic",
		"binOnHandJoin" => "ItemBinNumberSearchBasic",
		"correlatedItemJoin" => "ItemSearchBasic",
		"effectiveRevisionJoin" => "ItemRevisionSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchBasic",
		"inventoryLocationJoin" => "LocationSearchBasic",
		"inventoryNumberJoin" => "InventoryNumberSearchBasic",
		"inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchBasic",
		"memberItemJoin" => "ItemSearchBasic",
		"obsoleteRevisionJoin" => "ItemRevisionSearchBasic",
		"parentJoin" => "ItemSearchBasic",
		"preferredLocationJoin" => "LocationSearchBasic",
		"preferredVendorJoin" => "VendorSearchBasic",
		"pricingJoin" => "PricingSearchBasic",
		"shopperJoin" => "CustomerSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
