<?php

class SiteCategory extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $website;
	/**
	 * @access public
	 * @var string
	 */
	public $itemId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parentCategory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $categoryListLayout;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $itemListLayout;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $relatedItemsListLayout;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $correlatedItemsListLayout;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDetailedDescription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $storeDisplayThumbnail;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $storeDisplayImage;
	/**
	 * @access public
	 * @var string
	 */
	public $pageTitle;
	/**
	 * @access public
	 * @var string
	 */
	public $metaTagHtml;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var string
	 */
	public $urlComponent;
	/**
	 * @access public
	 * @var SitemapPriority
	 */
	public $sitemapPriority;
	/**
	 * @access public
	 * @var string
	 */
	public $searchKeywords;
	/**
	 * @access public
	 * @var SiteCategoryPresentationItemList
	 */
	public $presentationItemList;
	/**
	 * @access public
	 * @var SiteCategoryTranslationList
	 */
	public $translationsList;
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
		"website" => "RecordRef",
		"itemId" => "string",
		"parentCategory" => "RecordRef",
		"categoryListLayout" => "RecordRef",
		"itemListLayout" => "RecordRef",
		"relatedItemsListLayout" => "RecordRef",
		"correlatedItemsListLayout" => "RecordRef",
		"isOnline" => "boolean",
		"isInactive" => "boolean",
		"description" => "string",
		"storeDetailedDescription" => "string",
		"storeDisplayThumbnail" => "RecordRef",
		"storeDisplayImage" => "RecordRef",
		"pageTitle" => "string",
		"metaTagHtml" => "string",
		"excludeFromSitemap" => "boolean",
		"urlComponent" => "string",
		"sitemapPriority" => "SitemapPriority",
		"searchKeywords" => "string",
		"presentationItemList" => "SiteCategoryPresentationItemList",
		"translationsList" => "SiteCategoryTranslationList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
