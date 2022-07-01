<?php
session_start();
include_once 'config.php';
$errMessage = false;
$successMessage = false;
// var_dump($_POST);
if(isset($_POST['signup'])){
    register();
}
function register()
{
    if(isExist($_POST['email'])){
$errMessage="User is exist.Try with another email.";
header("location:/crypto-project/register.php");
    }
     else{
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $country=$_POST['country'];
        $gender=$_POST['gender'];
        $account_type=$_POST['account_type'];
        $currency=$_POST['currency'];
        $password=$_POST['password'];
        global $db;
        $query = "insert into $db->users(fullName,email,mobile,country,gender,type,currency,password)VALUES ('$fullname','$email','$phone','$country','$gender','$account_type','$currency','$password')";
        $result = $db->query($query);
        if ($result) {
            // return true;
            setSession($_POST);
            // var_dump($_SESSION);
            header("location:" . QA_URL);
            // var_dump($result);
        }

    }
    //  var_dump($_POST);   
}
function isExist($email)
{
    global $db;
    $sql = "select * from $db->users WHERE email='$email'";
    $query = $db->query($sql);
    if ($query) {
        $result = mysqli_fetch_all($query, 1);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }
   
}
function isLogin($email,$password)
{
    global $db;
    $sql = "select * from $db->users WHERE email='$email' AND password='$password'";
    $query = $db->query($sql);
    if ($query) {
        $result = mysqli_fetch_all($query, 1);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }
   
}
function setSession($result)
{
    $_SESSION['fullname'] = $result["fullname"];
    $_SESSION['email'] = $result["email"];
    $_SESSION['phone'] = $result["phone"];
    $_SESSION['country'] = $result["country"];
    $_SESSION['account_type'] = $result["account_type"];
    $_SESSION['currency'] = $result["currency"];
     $_SESSION['doLogin'] = true;
    
}
if (isset($_POST['login'])) {
    if(isLogin($_POST["email"],$_POST["password"])){
        $_SESSION['email'] = $_POST["email"]; 
        //    var_dump($_SESSION);
        header("location:" . QA_URL);
    }
else{
    header("location:/crypto-project/login.php");
}
}













