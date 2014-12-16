<?php

class CustomRecordTypePermissions {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $permittedRole;
	/**
	 * @access public
	 * @var CustomRecordTypePermissionsPermittedLevel
	 */
	public $permittedLevel;
	/**
	 * @access public
	 * @var CustomRecordTypePermissionsRestriction
	 */
	public $restriction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $defaultForm;
	/**
	 * @access public
	 * @var boolean
	 */
	public $restrictForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $searchForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $searchResults;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $listView;
	/**
	 * @access public
	 * @var boolean
	 */
	public $listViewRestricted;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $dashboardView;
	/**
	 * @access public
	 * @var boolean
	 */
	public $restrictDashboardView;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $sublistView;
	/**
	 * @access public
	 * @var boolean
	 */
	public $restrictSublistView;

	static $paramtypesmap = array(
		"permittedRole" => "RecordRef",
		"permittedLevel" => "CustomRecordTypePermissionsPermittedLevel",
		"restriction" => "CustomRecordTypePermissionsRestriction",
		"defaultForm" => "RecordRef",
		"restrictForm" => "boolean",
		"searchForm" => "RecordRef",
		"searchResults" => "RecordRef",
		"listView" => "RecordRef",
		"listViewRestricted" => "boolean",
		"dashboardView" => "RecordRef",
		"restrictDashboardView" => "boolean",
		"sublistView" => "RecordRef",
		"restrictSublistView" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
