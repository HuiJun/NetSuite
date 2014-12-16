<?php

class CampaignEventResponse {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var float
	 */
	public $sent;
	/**
	 * @access public
	 * @var float
	 */
	public $opened;
	/**
	 * @access public
	 * @var float
	 */
	public $openedRatio;
	/**
	 * @access public
	 * @var float
	 */
	public $clickedThru;
	/**
	 * @access public
	 * @var float
	 */
	public $clickedThruRatio;
	/**
	 * @access public
	 * @var integer
	 */
	public $responded;
	/**
	 * @access public
	 * @var float
	 */
	public $respondedRatio;
	/**
	 * @access public
	 * @var integer
	 */
	public $unsubscribed;
	/**
	 * @access public
	 * @var float
	 */
	public $unsubscribedRatio;
	/**
	 * @access public
	 * @var integer
	 */
	public $bounced;
	/**
	 * @access public
	 * @var float
	 */
	public $bouncedRatio;

	static $paramtypesmap = array(
		"name" => "string",
		"type" => "string",
		"dateSent" => "dateTime",
		"sent" => "float",
		"opened" => "float",
		"openedRatio" => "float",
		"clickedThru" => "float",
		"clickedThruRatio" => "float",
		"responded" => "integer",
		"respondedRatio" => "float",
		"unsubscribed" => "integer",
		"unsubscribedRatio" => "float",
		"bounced" => "integer",
		"bouncedRatio" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
