<?php

class Translation {
	/**
	 * @access public
	 * @var Language
	 */
	public $locale;
	/**
	 * @access public
	 * @var string
	 */
	public $language;
	/**
	 * @access public
	 * @var string
	 */
	public $displayName;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $salesDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDisplayName;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDetailedDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $featuredDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $specialsDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $pageTitle;
	/**
	 * @access public
	 * @var string
	 */
	public $noPriceMessage;
	/**
	 * @access public
	 * @var string
	 */
	public $outOfStockMessage;

	static $paramtypesmap = array(
		"locale" => "Language",
		"language" => "string",
		"displayName" => "string",
		"description" => "string",
		"salesDescription" => "string",
		"storeDisplayName" => "string",
		"storeDescription" => "string",
		"storeDetailedDescription" => "string",
		"featuredDescription" => "string",
		"specialsDescription" => "string",
		"pageTitle" => "string",
		"noPriceMessage" => "string",
		"outOfStockMessage" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
