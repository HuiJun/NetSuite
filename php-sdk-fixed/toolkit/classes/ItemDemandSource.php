<?php

class ItemDemandSource {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _enteredAndPlannedOrders = "_enteredAndPlannedOrders";
	/**
	 * @var string
	 */
	const _forecastAndOrders = "_forecastAndOrders";
	/**
	 * @var string
	 */
	const _forecastConsumption = "_forecastConsumption";
	/**
	 * @var string
	 */
	const _forecastFromDemandPlan = "_forecastFromDemandPlan";
    public static function create()
    {
        return new static();
    }
}
