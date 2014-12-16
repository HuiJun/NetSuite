<?php

class ProjectTaskAssignee {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $resource;
	/**
	 * @access public
	 * @var float
	 */
	public $units;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $serviceItem;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var float
	 */
	public $unitCost;
	/**
	 * @access public
	 * @var float
	 */
	public $unitPrice;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var float
	 */
	public $price;

	static $paramtypesmap = array(
		"resource" => "RecordRef",
		"units" => "float",
		"serviceItem" => "RecordRef",
		"estimatedWork" => "float",
		"unitCost" => "float",
		"unitPrice" => "float",
		"cost" => "float",
		"price" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
