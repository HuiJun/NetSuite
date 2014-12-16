<?php

class CampaignEmailList {
	/**
	 * @access public
	 * @var CampaignEmail[]
	 */
	public $campaignEmail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"campaignEmail" => "CampaignEmail[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
