<?php

class CustomerCreditCardsList {
	/**
	 * @access public
	 * @var CustomerCreditCards[]
	 */
	public $creditCards;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"creditCards" => "CustomerCreditCards[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
