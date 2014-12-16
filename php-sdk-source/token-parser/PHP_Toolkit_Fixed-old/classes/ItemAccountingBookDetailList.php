<?php

class ItemAccountingBookDetailList {
	/**
	 * @access public
	 * @var ItemAccountingBookDetail[]
	 */
	public $itemAccountingBookDetail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemAccountingBookDetail" => "ItemAccountingBookDetail[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
