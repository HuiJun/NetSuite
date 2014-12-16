<?php

class ManufacturingCostTemplateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
