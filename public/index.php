<?php


session_start();

// if (!isset($_SESSION['start'])) {
//     $_SESSION['start'] = time();
// }

// if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 5)) {

//     session_unset();
//     session_destroy();
//     header('Location: http://localhost/uca/public/login');
// }

require "../app/core/init.php";
DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);
$app = new App;
$app->loadController();
