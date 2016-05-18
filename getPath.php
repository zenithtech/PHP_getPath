<?php 

define('DOCROOT', $_SERVER['DOCUMENT_ROOT']);

define('ABSPATH', debug_backtrace()[count(debug_backtrace()) - 1]['file']);

define('PUBPATH', realpath(dirname(ABSPATH)).'/');

if (substr(PUBPATH, 0, strlen(DOCROOT)) == DOCROOT) {

	define('HOMEPATH', substr(PUBPATH, strlen(DOCROOT)));

}

if(!isset($_SESSION['PUBPATH'])) {

	$_SESSION['PUBPATH'] = PUBPATH;

}

if(!isset($_SESSION['ABSHOME'])) {

	$_SESSION['ABSHOME'] = HOMEPATH;

}

