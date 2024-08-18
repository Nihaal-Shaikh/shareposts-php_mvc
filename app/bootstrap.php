<?php

// Load Config.
require_once 'config/config.php';

// Load helpers.
require_once 'helper/url_helper.php';
require_once 'helper/session_helper.php';

// Autoload core libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});