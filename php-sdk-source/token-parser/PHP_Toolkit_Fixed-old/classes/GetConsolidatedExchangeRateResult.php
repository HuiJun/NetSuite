<?php

class GetConsolidatedExchangeRateResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateList
	 */
	public $consolidatedExchangeRateList;

	static $paramtypesmap = array(
		"status" => "Status",
		"consolidatedExchangeRateList" => "ConsolidatedExchangeRateList",
	);
    public static function create()
    {
        return new static();
    }
}
