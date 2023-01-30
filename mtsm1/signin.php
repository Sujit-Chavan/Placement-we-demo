<?php
if(isset($_POST['submit']))
{
    $Login = $_POST['Login'];
    $username = $_POST["username"];
    $pass = $_POST["pass"];

$host= "localhost";
$user="root";
$password="";
$dbname="c_data";

$con = mysqli_connect($host, $user, $password, $dbname);

if(!$con)
{
    die("Connection Failed!" . mysqli_connect_error());
}
if($Login == 'School'){
$sql= "select * from school_admin Where username ='$username' and pass = '$pass'" ;

$result = mysqli_query($con, $sql);
$check= mysqli_fetch_array($result);
if(isset($check)){
    session_start();
    header("location:adminpage.php");
    // echo 'Login as admin Successful';
    exit;
    }else{
    echo 'failure';
    }
    mysqli_close($con);
}
 
 elseif($Login == 'Student'){
    
$sql= "select * from student_data Where username ='$username' and pass = '$pass'" ;

$result = mysqli_query($con, $sql);
$check= mysqli_fetch_array($result);
if(isset($check)){
    session_start();
    header("location:studentpage.html");
    // echo 'Login as Student Successful';
    exit;
    }else{
    echo 'failure';
    }
    mysqli_close($con);
}

 elseif ($Login == 'Company') {
  
$sql= "select * from company_data Where username ='$username' and pass = '$pass'" ;

$result = mysqli_query($con, $sql);
$check= mysqli_fetch_array($result);
if(isset($check)){
    session_start();
    header("location:companypage.php");
    // echo 'Login as Company Successful';
    exit;
    }else{
    echo 'failure';
    }
    mysqli_close($con);
}
}
?>