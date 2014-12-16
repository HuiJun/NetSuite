<?php

class ItemDemandPlanProjectionMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _linearRegression = "_linearRegression";
	/**
	 * @var string
	 */
	const _movingAverage = "_movingAverage";
	/**
	 * @var string
	 */
	const _salesForecast = "_salesForecast";
	/**
	 * @var string
	 */
	const _seasonalAverage = "_seasonalAverage";
    public static function create()
    {
        return new static();
    }
}
