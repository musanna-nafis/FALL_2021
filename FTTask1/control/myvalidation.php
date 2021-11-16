<?php
$validatefname=""; 
 $validateemail="";
  $password=""; 
   $validateradio="";
   $v1=$v2=$v3="";  
    $validatecheckbox="";
     $validatelname=""; 
     $validateage="";

     
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name1=$_REQUEST["fname"];
 
if(empty($name1))
{
    $validatefname= "Please enter your first name";

}
else if(strlen($name1)<5){
    $validatefname= "First name should not less than 5 character";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name1)){
    $validatefname="First name should be alphabet"; 
}
else
{
    $validatefname=$name1;
}

$name2=$_REQUEST["lname"];
if(empty($name2))
{
    $validatelname= "Please enter your last name";

}
else if(strlen($name2)<5){
    $validatelname= "Last name should not less than 5 character";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name2)){
    $validatelname= "Last name should be alphabet"; 
}
else
{
    $validatelname=$name2;
}


$email=$_REQUEST["email"];
if(empty($email)){
    $validateemail="Email can not be empty";
  } 
else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validateemail= "your email is ".$email;
  } else {
    echo("$email is not a valid email address");
  }

$password1=$_REQUEST["password"];
if(empty($password1)){
  $password="You must enter password"."<br>";
}
else{
  if((strlen($password1)) <8){

    $password="Password should be at least 8 characters"."<br>";
  }
}

  if(!isset($_REQUEST["l1"])&&!isset($_REQUEST["l2"])&&!isset($_REQUEST["l3"]))
{
    $validatecheckbox = "Select at least one language";
    
}
else{
   if(isset($_REQUEST["l1"]))
   {
       $v1= $_REQUEST["l1"];
   }
   if(isset($_REQUEST["l2"]))
   { 
       $v2= $_REQUEST["l2"];
   }
   if(isset($_REQUEST["l3"]))
   {
    $v3= $_REQUEST["l3"];
   }
}
  if(isset($_REQUEST["designation"]))
{
    $validateradio= $_REQUEST["designation"];
}
else{
    $validateradio= "Please select your designation";
}
$age1=$_REQUEST["age"];

if(empty($age1)){
    $validateage="Please enter your age";
}
else if(!is_numeric($age1)) {
    $validateage="Age should be numeric";
}
else {
    $validateage=$age1;
}





}
?>