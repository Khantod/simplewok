<?php
include_once 'app\functions.php';

// ambil file
ambilFile('resources\view\home.view.php');
ambilFile('resources\view\error.view.php');
ambilFile('app\controllers\test.controller.php');
ambilFile('resources\view\about.view.php');

// ambil isi dari url
if (isset($_GET['request'])) {
    $request = $_GET['request'];
} else {
    $request = '';
}
$page = trim($request, '/');

// routing disini yaaaa
function routing()
{
    global $page;

    // ini buat menangkap parameter (buat keperluan dinamik)
    $parameter = explode('/', $page);
    switch (true) {
        case $page == '':
            homePage();
            break;
        case $parameter[0] === 'username' && isset($parameter[1]):
            test($parameter[0], $parameter[1]);
            break;
        case $page ===  'about':
            aboutPage();
            break;
        default:
            error();
            break;
    }
}
