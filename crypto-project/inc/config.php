<?php
//تعریف ثابت ها
define('QA_URL','http://localhost/crypto-project');
define('QA_QUESTION_PER_PAGE',10);define('QA_QUESTION_MIN_LENGHT',10);
define('QA_UNAME_MIN_LENGHT',5);
define('QA_DATE_FORMAT',"d F Y");
//error
ini_set('display_errors','on');
error_reporting(E_ALL);

//database
$dbName='crypto-project';
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($db->connect_errno){
    echo 'yes there are error:'.$db->connect_errno;
    exit();
}
mysqli_set_charset($db,'utf_8');

$db->users="users";