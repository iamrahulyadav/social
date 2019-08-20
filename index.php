<?php
include_once('assets/init.php');
// $dotenv = Dotenv\Dotenv::create(__DIR__);
// $dotenv->load(__DIR__);
// $dotenv->required(array('DB_HOST', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'));
if(isset($_GET['link1'])) {
    $page = $_GET['link1'];
} else {
    $page = '';
}

switch ($page) {
    case 'login':
        include('source/login.php');
        break;
    default:
        echo "a";
        break;
}
echo So_LoadPage('container');

mysqli_close($dbConnect);