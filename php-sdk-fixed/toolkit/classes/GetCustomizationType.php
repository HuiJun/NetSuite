<?php

class GetCustomizationType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const crmCustomField = "crmCustomField";
	/**
	 * @var string
	 */
	const customList = "customList";
	/**
	 * @var string
	 */
	const customRecordType = "customRecordType";
	/**
	 * @var string
	 */
	const entityCustomField = "entityCustomField";
	/**
	 * @var string
	 */
	const itemCustomField = "itemCustomField";
	/**
	 * @var string
	 */
	const itemNumberCustomField = "itemNumberCustomField";
	/**
	 * @var string
	 */
	const itemOptionCustomField = "itemOptionCustomField";
	/**
	 * @var string
	 */
	const otherCustomField = "otherCustomField";
	/**
	 * @var string
	 */
	const transactionBodyCustomField = "transactionBodyCustomField";
	/**
	 * @var string
	 */
	const transactionColumnCustomField = "transactionColumnCustomField";
    public static function create()
    {
        return new static();
    }
}
