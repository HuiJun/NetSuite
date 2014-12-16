<?php

class SiteCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $sitemapPriority;

	static $paramtypesmap = array(
		"dateViewed" => "SearchDateField",
		"description" => "SearchStringField",
		"excludeFromSitemap" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"name" => "SearchMultiSelectField",
		"sitemapPriority" => "SearchEnumMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
