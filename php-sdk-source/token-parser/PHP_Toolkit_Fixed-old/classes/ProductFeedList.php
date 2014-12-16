<?php

class ProductFeedList {
	/**
	 * @access public
	 * @var ItemProductFeed[]
	 */
	public $productFeed;

	static $paramtypesmap = array(
		"productFeed" => "ItemProductFeed[]",
	);
    public static function create()
    {
        return new static();
    }
}
