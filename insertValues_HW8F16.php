<?php
error_reporting(E_ALL); 
ini_set( 'display_errors','1'); 
$con= mysqli_connect('egon.cs.umn.edu','C4131F16U128','18606','C4131F16U128','3307');
// Check connection
if (mysqli_connect_errno())
  {
  echo 'Failed to connect to MySQL:' . mysqli_connect_error();
  }

//You can replace the strings below with whatever passwords you would like
$str1 = "55455";
$str2 = 'abcde';
$str3 = '54321';
// You can replace the 
//'Jim Smith', 'Smitty'   And
//'Jane Jones', 'JJones'
//with whatever account names and logins that you would like
//NOTE, you can have more account names and logins than 2, but you need at least 1
mysqli_query($con,"INSERT INTO tbl_accounts (acc_name, acc_login, acc_password) VALUES ('Tiannan', 'tnz', '". sha1($str1)."');");
mysqli_query($con,"INSERT INTO tbl_accounts (acc_name, acc_login, acc_password) VALUES ('Mike', 'mike', '". sha1($str2)."');");
mysqli_query($con,"INSERT INTO tbl_accounts (acc_name, acc_login, acc_password) VALUES ('Jeff', 'jeff', '". sha1($str3)."');");

mysqli_close($con);


echo '<h1> Successfully Inserted Values into the Table </h1>'
?> 
