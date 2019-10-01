<?php
namespace Wikifab;

class Hooks {

	public static function onRegistration() {
	}

	public static function initialize() {
	}

	public static function onBeforePageDisplay( &$oOutputPage, &$oSkin ) {
		$wgOut->addModuleStyles( 'ext.wikifab.css' );

		return true;
	}
}
