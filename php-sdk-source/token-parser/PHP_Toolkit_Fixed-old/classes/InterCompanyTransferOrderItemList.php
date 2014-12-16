<?php

class InterCompanyTransferOrderItemList {
	/**
	 * @access public
	 * @var InterCompanyTransferOrderItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "InterCompanyTransferOrderItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
