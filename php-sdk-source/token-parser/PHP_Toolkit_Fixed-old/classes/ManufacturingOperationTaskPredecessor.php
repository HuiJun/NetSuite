<?php

class ManufacturingOperationTaskPredecessor {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $task;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskPredecessorPredecessorType
	 */
	public $type;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
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
		"task" => "RecordRef",
		"type" => "ManufacturingOperationTaskPredecessorPredecessorType",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"lagType" => "ManufacturingLagType",
		"lagAmount" => "integer",
		"lagUnits" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
