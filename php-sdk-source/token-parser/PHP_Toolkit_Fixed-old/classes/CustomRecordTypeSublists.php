<?php

class CustomRecordTypeSublists {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recordSearch;
	/**
	 * @access public
	 * @var string
	 */
	public $recordDescr;
	/**
	 * @access public
	 * @var LanguageValueList
	 */
	public $recordDescrLanguageValueList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recordTab;
	/**
	 * @access public
	 * @var string
	 */
	public $recordId;

	static $paramtypesmap = array(
		"recordSearch" => "RecordRef",
		"recordDescr" => "string",
		"recordDescrLanguageValueList" => "LanguageValueList",
		"recordTab" => "RecordRef",
		"recordId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
