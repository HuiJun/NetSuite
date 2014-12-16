<?php

class GiftCertificateSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var GiftCertificateSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var GiftCertificateSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "GiftCertificateSearch",
		"columns" => "GiftCertificateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
