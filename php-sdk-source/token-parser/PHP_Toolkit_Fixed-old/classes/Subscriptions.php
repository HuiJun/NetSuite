<?php

class Subscriptions {
	/**
	 * @access public
	 * @var boolean
	 */
	public $subscribed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subscription;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;

	static $paramtypesmap = array(
		"subscribed" => "boolean",
		"subscription" => "RecordRef",
		"lastModifiedDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
