<?php
namespace Wikifab;

class Hooks {

	public static function onRegistration() {
		global $wgInitPages;

		if ( ! isset($wgInitPages) ) {
			$wgInitPages = [];
		}
		$wgInitPages[] = dirname( __DIR__) . "/initPages/dokit-base";
	}

	public static function initialize() {
	}

	public static function onBeforePageDisplay( &$outputPage, &$oSkin ) {
		$outputPage->addModuleStyles( 'ext.wikifab.css' );

		return true;
	}
}
