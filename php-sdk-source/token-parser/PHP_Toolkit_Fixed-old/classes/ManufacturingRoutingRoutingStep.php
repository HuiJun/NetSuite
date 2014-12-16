<?php

class ManufacturingRoutingRoutingStep {
	/**
	 * @access public
	 * @var integer
	 */
	public $operationSequence;
	/**
	 * @access public
	 * @var string
	 */
	public $operationName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var integer
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var integer
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var float
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var float
	 */
	public $runRate;
	/**
	 * @access public
	 * @var ManufacturingLagType
	 */
	public $lagType;
	/**
	 * @access public
	 * @var integer
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $lagUnits;

	static $paramtypesmap = array(
		"operationSequence" => "integer",
		"operationName" => "string",
		"manufacturingWorkCenter" => "RecordRef",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"manufacturingCostTemplate" => "RecordRef",
		"setupTime" => "float",
		"runRate" => "float",
		"lagType" => "ManufacturingLagType",
		"lagAmount" => "integer",
		"lagUnits" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
