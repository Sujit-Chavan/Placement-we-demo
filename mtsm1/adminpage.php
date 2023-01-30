<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
       body{
      background-image:url(images/asd.jpg);
    }
      .companypage h1{
  text-align: center;
}
table, th, td {
  border: 1px solid black;
  margin: 10px 150px;
  width:20%;
  text-align: center;
}
th, td {
   padding: 15px;
}
th{
   background-color: #C0C0C0;
}
td{
   background-color:#E5E4E2;
}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="logo.png" class="logo"></a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="active"><a href="#">About Us</a></li>
            <li class="active"><a href="Contactus.html">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
          </ul>
        </div>
      </nav> 
      <div class="companypage">
   <h1>Students Details</h1>
   <table>
      <tr>
      <th>Id</th>
      <th>fname</th>
      <th>mname</th>
      <th>lname</th>
      <th>Qualification</th>
      <th>Qualification Status</th>
      <th>Gender</th>
      <th>Mobile No</th>
      <th>Email Id</th>
      <th>Address</th>
      <th></th>
      <th></th>
</tr>
   
  
      <?php
      $host = "localhost";
      $user = "root";
      $pass = "";
      $dbname = "c_data";
      $con= mysqli_connect($host, $user, $pass, $dbname);
if(!$con)
{
    die("Connection Error!" . mysqli_connect_error());
}

      $sql= " select * from student_data";
      $result = $con->query($sql);
      while($row = $result->fetch_assoc()){
      echo "<tr>
      <td>" . $row["id"] . "</td>
      <td>" . $row["fname"] . "</td>
      <td>" . $row["mname"] . "</td>
      <td>" . $row["lname"] . "</td>
      <td>" . $row["qualification"] . "</td>
      <td>" . $row["quali_status"] . "</td>
      <td>" . $row["gender"] . "</td>
      <td>" . $row["phone"] . "</td>
      <td>" . $row["email"] . "</td>
      <td>" . $row["address"] . "</td>
      <td>
      <a href='#'>Update</a>
      </td>
      <td>
      <a href='#'>delete</a>
      </td>
      </tr>";
      }
      ?>
      </table>
      </div>
</body>
</html>