<?php
if(isset($_POST['submit']))
{

 $fname = $_POST['fname'];
 $mname = $_POST['mname'];
 $lname = $_POST['lname'];
 $qualification = $_POST['qualification'];
 $quali_status = $_POST['quali_status'];
 $gender =$_POST['gender'];
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
$sql = "insert into student_data(fname, mname, lname, qualification, quali_status, gender, phone, email, address,username, pass)values('$fname', '$mname', '$lname', '$qualification', '$quali_status', '$gender', '$phone', '$email', '$address', '$username', '$pass')";
$rs= mysqli_query($con, $sql);
if($rs){
     header("location:SignIn.html");
    
    }
mysqli_close($con);

?>