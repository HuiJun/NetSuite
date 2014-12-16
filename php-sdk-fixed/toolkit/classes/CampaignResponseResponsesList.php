<?php

class CampaignResponseResponsesList {
	/**
	 * @access public
	 * @var CampaignResponseResponses[]
	 */
	public $responses;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"responses" => "CampaignResponseResponses[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
