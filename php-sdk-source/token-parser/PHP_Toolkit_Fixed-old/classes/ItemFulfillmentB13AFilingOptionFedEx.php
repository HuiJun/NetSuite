<?php

class ItemFulfillmentB13AFilingOptionFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _filedElectronically = "_filedElectronically";
	/**
	 * @var string
	 */
	const _manuallyAttached = "_manuallyAttached";
	/**
	 * @var string
	 */
	const _notRequired = "_notRequired";
	/**
	 * @var string
	 */
	const _summaryReporting = "_summaryReporting";
    public static function create()
    {
        return new static();
    }
}
