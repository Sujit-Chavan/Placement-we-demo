<?php
if(isset($_POST['submit']))
{
 $c_name = $_POST['c_name'];
 $reg_no = $_POST['reg_no'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $username = $_POST['username'];
 $pass = $_POST['pass'];
}
$host = "localhost";
$user ="root";
$password ="";
$dbname = "c_data";

$con= mysqli_connect($host, $user, $password, $dbname);
if(!$con)
{
    die("Connection Error!" . mysqli_connect_error());
}
$sql = "insert into company_data(c_name, reg_no, phone, email, address,username, pass)values('$c_name', '$reg_no',  '$phone', '$email', '$address', '$username', '$pass')";
$rs= mysqli_query($con, $sql);
if($rs){
     header("location:SignIn.html");
    }
    else{
        echo'Wrong Credential';
    }
mysqli_close($con);

?>