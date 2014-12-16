<?php

class ConsolidatedExchangeRateList {
	/**
	 * @access public
	 * @var ConsolidatedExchangeRate[]
	 */
	public $consolidatedExchangeRate;

	static $paramtypesmap = array(
		"consolidatedExchangeRate" => "ConsolidatedExchangeRate[]",
	);
    public static function create()
    {
        return new static();
    }
}
