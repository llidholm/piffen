<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package PiffenCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('PIFFEN_INSTALL_PATH', dirname(__FILE__));
define('PIFFEN_SITE_PATH', PIFFEN_INSTALL_PATH . '/site');

require(PIFFEN_INSTALL_PATH.'/src/bootstrap.php');

$pf = CPiffen::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$pf->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$pf->ThemeEngineRender();
