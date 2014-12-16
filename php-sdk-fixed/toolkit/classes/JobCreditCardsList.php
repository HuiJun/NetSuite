<?php

class JobCreditCardsList {
	/**
	 * @access public
	 * @var JobCreditCards[]
	 */
	public $creditCards;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"creditCards" => "JobCreditCards[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
