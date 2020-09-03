<?php
  error_reporting(0);
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="website";
 
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 
if($conn)
{
 
	 echo "connection successful";
 }
 else
 {
	 echo "connection failed :" .mysqli_connect_error();
 }
 
 
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $countrycode=$_POST['countrycode'];
 $number=$_POST['phonenumber'];
 $pass=$_POST['password'];
 
 
 $query="INSERT INTO DATA VALUES ($firstname','$lastname','$gender','$email','$countrycode','$number','$pass')";
  $exe=mysqli_query($conn,$query);
  if($exe)
  {
	  echo "data entered";
  }
  else
  {
	echo "failed";
  }	
 
?>