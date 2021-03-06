<?php
/**
 * Login page. This page should be named "login.php" and located under the
 * "/bt/login.php" path of the web server document root directory (or at least
 * these are the expected settings; to change, look at the com\acme\www\Common
 * class and change accordingly).
 * @package login.php
 */
require_once __DIR__ . "/../../../../all.php";

use com\acme\www\Login;

(new Login())->processRequest();
