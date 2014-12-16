<?php

class PresentationItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var PresentationItemType
	 */
	public $itemType;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var float
	 */
	public $onlinePrice;
	/**
	 * @access public
	 * @var float
	 */
	public $basePrice;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"itemType" => "PresentationItemType",
		"description" => "string",
		"onlinePrice" => "float",
		"basePrice" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
