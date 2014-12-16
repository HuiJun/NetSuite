<?php

class CustomSearchJoin {
	/**
	 * @access public
	 * @var CustomizationRef
	 */
	public $customizationRef;
	/**
	 * @access public
	 * @var SearchRecordBasic
	 */
	public $searchRecordBasic;

	static $paramtypesmap = array(
		"customizationRef" => "CustomizationRef",
		"searchRecordBasic" => "SearchRecordBasic",
	);
    public static function create()
    {
        return new static();
    }
}
