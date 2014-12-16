<?php

class ItemFulfillmentAncillaryEndorsementFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _addressCorrection = "_addressCorrection";
	/**
	 * @var string
	 */
	const _carrierLeaveIfNoResponse = "_carrierLeaveIfNoResponse";
	/**
	 * @var string
	 */
	const _changeService = "_changeService";
	/**
	 * @var string
	 */
	const _forwardingService = "_forwardingService";
	/**
	 * @var string
	 */
	const _returnService = "_returnService";
    public static function create()
    {
        return new static();
    }
}
