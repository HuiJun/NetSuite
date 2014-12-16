<?php

class CampaignEventResponseList {
	/**
	 * @access public
	 * @var CampaignEventResponse[]
	 */
	public $eventResponse;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"eventResponse" => "CampaignEventResponse[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
