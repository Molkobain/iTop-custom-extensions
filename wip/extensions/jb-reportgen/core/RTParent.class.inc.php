<?php

/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2020-04-09 17:01:06
 *
 * Definition of class RTParent. Parent Report Tool (RT) to expand upon.
 */

namespace jb_itop_extensions\report_generator\tools;

/**
 * Main class which can be used as a parent, so some properties are automatically inherited
 */
abstract class RTParent {
	
	/**
	 * @var \Integer $rank Rank. Lower number = goes first.
	 */
	public static $rank = 50;
	
	
	/**
	 * Constructor
	 */
	public function __construct() {
		
	}
	
	/**
	 * Whether or not this extension is applicable
	 *
	 * @return Boolean
	 *
	 */
	public static function IsApplicable() {
		
		// This parent class should not be applicable.
		return false;
		
	}
	
	/**
	 * Rendering hook
	 *
	 * @var \Array $aReportData Report data
	 * @var \CMDBObjectSet[] $oSet_Objects CMDBObjectSet of iTop objects which are being processed
	 *
	 */
	public static function EnrichData(&$aReportData, $oSet_Objects) {
		
		// Enrich data
		
	}
	
	/**
	 * Action hook
	 *
	 * @var \Array $aReportData Report data
	 * @var \CMDBObjectSet[] $oSet_Objects CMDBObjectSet of iTop objects which are being processed
	 *
	 */
	public static function DoExec($aReportData, $oSet_objects) {
		
		// Do stuff
		
	}
	
	/**
	 * Outputs error (from Exception)
	 *
	 * @var \Exception $e Exception
	 *
	 */
	public static function OutputError(\Exception $e) {
		
		require_once(APPROOT.'/application/nicewebpage.class.inc.php');
		$oP = new \NiceWebPage(\Dict::S('UI:PageTitle:FatalError'));
		$oP->add("<h1>".\Dict::S('UI:FatalErrorMessage')."</h1>\n");	
		$oP->add(\Dict::Format('UI:Error_Details', $e->getMessage()));	
		$oP->output();
		
	}
	
}
