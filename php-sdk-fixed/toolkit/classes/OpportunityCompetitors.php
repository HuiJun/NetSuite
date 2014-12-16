<?php

class OpportunityCompetitors {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $competitor;
	/**
	 * @access public
	 * @var string
	 */
	public $url;
	/**
	 * @access public
	 * @var string
	 */
	public $notes;
	/**
	 * @access public
	 * @var string
	 */
	public $strategy;
	/**
	 * @access public
	 * @var boolean
	 */
	public $winner;

	static $paramtypesmap = array(
		"competitor" => "RecordRef",
		"url" => "string",
		"notes" => "string",
		"strategy" => "string",
		"winner" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
