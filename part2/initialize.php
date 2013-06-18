<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:'.DS.'Wamp'.DS.'www'.DS.'PHPTest'.DS.'part2'.DS);


require_once(SITE_ROOT.DS.'config.php');

require_once(SITE_ROOT.DS.'database.php');
require_once(SITE_ROOT.DS.'database_object.php');

require_once(SITE_ROOT.DS.'Payment.php');
require_once(SITE_ROOT.DS.'Customer.php');

?>