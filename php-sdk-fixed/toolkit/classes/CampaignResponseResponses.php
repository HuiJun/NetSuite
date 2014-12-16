<?php

class CampaignResponseResponses {
	/**
	 * @access public
	 * @var string
	 */
	public $response;
	/**
	 * @access public
	 * @var string
	 */
	public $responseDate;
	/**
	 * @access public
	 * @var string
	 */
	public $author;
	/**
	 * @access public
	 * @var string
	 */
	public $note;

	static $paramtypesmap = array(
		"response" => "string",
		"responseDate" => "string",
		"author" => "string",
		"note" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
