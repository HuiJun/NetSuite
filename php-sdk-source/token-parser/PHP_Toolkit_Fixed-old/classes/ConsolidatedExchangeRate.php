<?php

class ConsolidatedExchangeRate {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var float
	 */
	public $currentRate;
	/**
	 * @access public
	 * @var float
	 */
	public $averageRate;
	/**
	 * @access public
	 * @var float
	 */
	public $historicalRate;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
		"currentRate" => "float",
		"averageRate" => "float",
		"historicalRate" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
