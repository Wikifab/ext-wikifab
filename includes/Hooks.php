<?php
namespace Wikifab;

class Hooks {

	public static function onRegistration() {
	}

	public static function initialize() {
	}

	public static function onBeforePageDisplay( &$outputPage, &$oSkin ) {
		$outputPage->addModuleStyles( 'ext.wikifab.css' );

		return true;
	}
}
