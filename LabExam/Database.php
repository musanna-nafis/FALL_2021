<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

   $fname=$_REQUEST["fname"];
   $lname=$_REQUEST["lname"];
   $email=$_REQUEST["email"];
   $gender=$_REQUEST["gender"];
   $mobile=$_REQUEST["mobile"];
   $date=$_REQUEST["date"];
   $hsc=$_REQUEST["hsc"];
   $ssc=$_REQUEST["ssc"];
   $course=$_REQUEST["course"];
   $year=$_REQUEST["year"];
   $semester=$_REQUEST["semester"];
   
   //for database

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "aiub";
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO new_students (firstname,lastname ,email,gender,mobileno,dob,hscresult,sscresult,course,enrollingyear,enrollingsemester)
    VALUES ('$fname', '$lname','$email','$gender','$mobile','$date',$hsc,$ssc,'$course',$year,'$semester')";
    $res = $conn->query($sql);
    if($res)
    { echo "new record inserted"; }
    else 
    { echo "error occurred"; }
    $conn->close();

}
?>


