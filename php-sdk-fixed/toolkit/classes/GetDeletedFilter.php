<?php

class GetDeletedFilter {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $deletedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;

	static $paramtypesmap = array(
		"deletedDate" => "SearchDateField",
		"type" => "SearchEnumMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
