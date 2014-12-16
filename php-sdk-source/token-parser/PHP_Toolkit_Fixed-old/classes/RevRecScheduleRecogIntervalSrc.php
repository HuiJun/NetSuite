<?php

class RevRecScheduleRecogIntervalSrc {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _revRecDatesSpecifiedOnTransaction = "_revRecDatesSpecifiedOnTransaction";
	/**
	 * @var string
	 */
	const _billingScheduleTranDateOnSalesOrder = "_billingScheduleTranDateOnSalesOrder";
	/**
	 * @var string
	 */
	const _billingScheduleRevRecDateOnSalesOrder = "_billingScheduleRevRecDateOnSalesOrder";
	/**
	 * @var string
	 */
	const _revRecDatesSpecifiedOnSalesOrder = "_revRecDatesSpecifiedOnSalesOrder";
    public static function create()
    {
        return new static();
    }
}
