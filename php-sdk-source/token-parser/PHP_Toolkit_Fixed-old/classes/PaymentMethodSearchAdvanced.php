<?php

class PaymentMethodSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PaymentMethodSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PaymentMethodSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "PaymentMethodSearch",
		"columns" => "PaymentMethodSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
