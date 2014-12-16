<?php

class ItemFulfillmentPackageFedExPackagingFedEx {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fedExBox = "_fedExBox";
	/**
	 * @var string
	 */
	const _fedEx10kgBox = "_fedEx10kgBox";
	/**
	 * @var string
	 */
	const _fedEx25kgBox = "_fedEx25kgBox";
	/**
	 * @var string
	 */
	const _fedExEnvelope = "_fedExEnvelope";
	/**
	 * @var string
	 */
	const _fedExPak = "_fedExPak";
	/**
	 * @var string
	 */
	const _fedExTube = "_fedExTube";
	/**
	 * @var string
	 */
	const _yourPackaging = "_yourPackaging";
    public static function create()
    {
        return new static();
    }
}
