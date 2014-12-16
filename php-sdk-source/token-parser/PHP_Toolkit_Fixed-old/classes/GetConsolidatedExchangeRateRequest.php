<?php

class GetConsolidatedExchangeRateRequest {
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateFilter
	 */
	public $consolidatedExchangeRateFilter;

	static $paramtypesmap = array(
		"consolidatedExchangeRateFilter" => "ConsolidatedExchangeRateFilter",
	);
    public static function create()
    {
        return new static();
    }
}
