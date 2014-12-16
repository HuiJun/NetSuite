<?php

class BudgetCategory extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var boolean
	 */
	public $budgetType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"name" => "string",
		"budgetType" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
