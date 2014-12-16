<?php

class ItemSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BinSearchRowBasic
	 */
	public $binNumberJoin;
	/**
	 * @access public
	 * @var ItemBinNumberSearchRowBasic
	 */
	public $binOnHandJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $correlatedItemJoin;
	/**
	 * @access public
	 * @var ItemRevisionSearchRowBasic
	 */
	public $effectiveRevisionJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var InventoryDetailSearchRowBasic
	 */
	public $inventoryDetailJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $inventoryLocationJoin;
	/**
	 * @access public
	 * @var InventoryNumberSearchRowBasic
	 */
	public $inventoryNumberJoin;
	/**
	 * @access public
	 * @var InventoryNumberBinSearchRowBasic
	 */
	public $inventoryNumberBinOnHandJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $memberItemJoin;
	/**
	 * @access public
	 * @var ItemRevisionSearchRowBasic
	 */
	public $obsoleteRevisionJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $parentJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $preferredLocationJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $preferredVendorJoin;
	/**
	 * @access public
	 * @var PricingSearchRowBasic
	 */
	public $pricingJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $shopperJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchRowBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ItemSearchRowBasic",
		"binNumberJoin" => "BinSearchRowBasic",
		"binOnHandJoin" => "ItemBinNumberSearchRowBasic",
		"correlatedItemJoin" => "ItemSearchRowBasic",
		"effectiveRevisionJoin" => "ItemRevisionSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
		"inventoryLocationJoin" => "LocationSearchRowBasic",
		"inventoryNumberJoin" => "InventoryNumberSearchRowBasic",
		"inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchRowBasic",
		"memberItemJoin" => "ItemSearchRowBasic",
		"obsoleteRevisionJoin" => "ItemRevisionSearchRowBasic",
		"parentJoin" => "ItemSearchRowBasic",
		"preferredLocationJoin" => "LocationSearchRowBasic",
		"preferredVendorJoin" => "VendorSearchRowBasic",
		"pricingJoin" => "PricingSearchRowBasic",
		"shopperJoin" => "CustomerSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
