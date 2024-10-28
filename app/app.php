<!-- This is for keeping our code dry by not repeating ours by having a central file for our require statements -->
<?php
// Return a parent derocty location
define('APP_PATH', dirname(__FILE__) . '/../'); // joning and going back one path to the parent path e.g main-> web glossary project lesson-6 (Managing PHP Paths) path
require APP_PATH . 'inc/config.php';
require APP_PATH . 'inc/functions.php';
// require APP_PATH . 'app/data/data.class.php';
// require APP_PATH . 'app/data/filedataprovider.class.php';

