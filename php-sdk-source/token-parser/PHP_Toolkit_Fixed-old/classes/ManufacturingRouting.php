<?php

class ManufacturingRouting extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $locationList;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var ManufacturingRoutingRoutingStepList
	 */
	public $routingStepList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"subsidiary" => "RecordRef",
		"item" => "RecordRef",
		"locationList" => "RecordRefList",
		"name" => "string",
		"memo" => "string",
		"isDefault" => "boolean",
		"isInactive" => "boolean",
		"autoCalculateLag" => "boolean",
		"routingStepList" => "ManufacturingRoutingRoutingStepList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
