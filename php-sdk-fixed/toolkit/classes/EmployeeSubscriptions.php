<?php

class EmployeeSubscriptions {
	/**
	 * @access public
	 * @var string
	 */
	public $subscribed;
	/**
	 * @access public
	 * @var string
	 */
	public $subscription;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;

	static $paramtypesmap = array(
		"subscribed" => "string",
		"subscription" => "string",
		"lastModifiedDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
