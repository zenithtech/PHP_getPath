<?php 

$documentroot = $_SERVER['DOCUMENT_ROOT'];

$absolutepath = debug_backtrace()[count(debug_backtrace()) - 1]['file'];

$publicpath = realpath(dirname($absolutepath)).'/';

if (substr($publicpath, 0, strlen($documentroot)) == $documentroot) {

    $publicpathTrimmed = substr($publicpath, strlen($documentroot));

}

if(!isset($_SESSION['publicpath'])) {

	$_SESSION['publicpath'] = $publicpath;

}

if(!isset($_SESSION['pathname'])) {

	$_SESSION['pathname'] = $publicpathTrimmed;

}
