<?php

class TimeSheetTimeGrid {
	/**
	 * @access public
	 * @var TimeEntry
	 */
	public $sunday;
	/**
	 * @access public
	 * @var TimeEntry
	 */
	public $monday;
	/**
	 * @access public
	 * @var TimeEntry
	 */
	public $tuesday;
	/**
	 * @access public
	 * @var TimeEntry
	 */
	public $wednesday;
	/**
	 * @access public
	 * @var TimeEntry
	 */
	public $thursday;
	/**
	 * @access public
	 * @var TimeEntry
	 */
	public $friday;
	/**
	 * @access public
	 * @var TimeEntry
	 */
	public $saturday;

	static $paramtypesmap = array(
		"sunday" => "TimeEntry",
		"monday" => "TimeEntry",
		"tuesday" => "TimeEntry",
		"wednesday" => "TimeEntry",
		"thursday" => "TimeEntry",
		"friday" => "TimeEntry",
		"saturday" => "TimeEntry",
	);
    public static function create()
    {
        return new static();
    }
}
