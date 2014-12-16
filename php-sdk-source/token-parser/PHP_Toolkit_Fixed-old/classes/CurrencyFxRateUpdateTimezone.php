<?php

class CurrencyFxRateUpdateTimezone {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _americaNewYork = "_americaNewYork";
	/**
	 * @var string
	 */
	const _asiaMagadan = "_asiaMagadan";
	/**
	 * @var string
	 */
	const _asiaTokyo = "_asiaTokyo";
	/**
	 * @var string
	 */
	const _europeParis = "_europeParis";
    public static function create()
    {
        return new static();
    }
}
