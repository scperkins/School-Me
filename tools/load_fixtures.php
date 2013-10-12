<?php

require_once('config/bootstrap.php');

$options = getopt("s:");
if(!isset($options['s']))
{
	echo "\nPlease use the -s flag to indicate which fixture set to use.\nExample: php load_fixtures.php -s=dinkly\n\n";
	die();
}
DinklyDataConfig::setActiveConnection('content');
DinklyBuilder::loadAll($options['s']);