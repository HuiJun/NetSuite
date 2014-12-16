<?php

class BinSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $inactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnStringField[]",
		"inactive" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"location" => "SearchColumnStringField[]",
		"memo" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
