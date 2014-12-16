<?php

class PromotionCodeItems {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;

	static $paramtypesmap = array(
		"item" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
