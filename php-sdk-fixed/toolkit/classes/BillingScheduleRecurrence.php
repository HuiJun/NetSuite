<?php

class BillingScheduleRecurrence {
	/**
	 * @access public
	 * @var integer
	 */
	public $recurrenceId;
	/**
	 * @access public
	 * @var integer
	 */
	public $count;
	/**
	 * @access public
	 * @var BillingScheduleRecurrenceRecurrenceUnits
	 */
	public $units;
	/**
	 * @access public
	 * @var boolean
	 */
	public $relativeToPrevious;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $recurrenceDate;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentTerms;

	static $paramtypesmap = array(
		"recurrenceId" => "integer",
		"count" => "integer",
		"units" => "BillingScheduleRecurrenceRecurrenceUnits",
		"relativeToPrevious" => "boolean",
		"recurrenceDate" => "dateTime",
		"amount" => "float",
		"paymentTerms" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
