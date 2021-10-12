<?php
$count=0;
$ok=true;
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
    $ok=false;

}
else if(strlen($name1)<5){
    $validatefname= "First name should not less than 5 character";
    $ok=false;
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name1)){
    $validatefname="First name should be alphabet"; 
    $ok=false;
}

$name2=$_REQUEST["lname"];
if(empty($name2))
{
    $validatelname= "Please enter your last name";
    $ok=false;

}
else if(strlen($name2)<5){
    $validatelname= "Last name should not less than 5 character";
    $ok=false;
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name2)){
    $validatelname= "Last name should be alphabet"; 
    $ok=false;
}


$email=$_REQUEST["email"];
if(empty($email)){
    $validateemail="Email can not be empty";
    $ok=false;
  } 
else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $count=$count+1;
  } else {
    echo("$email is not a valid email address");
    $ok=false;
  }

$password1=$_REQUEST["password"];
if(empty($password1)){
  $password="You must enter password"."<br>";
  $ok=false;
}
else{
  if((strlen($password1)) <8){

    $password="Password should be at least 8 characters"."<br>";
    $ok=false;
  }
 
}

  if(!isset($_REQUEST["l1"])&&!isset($_REQUEST["l2"])&&!isset($_REQUEST["l3"]))
{
    $validatecheckbox = "Select at least one language";
    $ok=false;
    
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
    $count=$count+1;
}
else{
    $validateradio= "Please select your designation";
    $ok=false;
}
$age1=$_REQUEST["age"];

if(empty($age1)){
    $validateage="Please enter your age";
    $ok=false;
}
else if(!is_numeric($age1)) {
    $validateage="Age should be numeric";
    $ok=false;
}


if($ok==true)
    {
        
        $target_dir="files/";
        $_FILES["image"]["name"]="image.jpg";
        $target_file="files/".$_FILES["image"]["name"];

        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
        {
            echo "Image successfully uploaded<br>";
            
        }
        else
        {
            echo "Sorry, there was an error uploading image<br>";
        }
        $formdata=array(
            'firstname'=>$name1,
            'lastname'=>$name2,
            'age'=>$age1,
            'designation'=>$_REQUEST['designation'],
            'language'=>$v1,
            'email'=>$email,
            'password'=>$password1,
            'image'=>$target_file
        );
        if($v2!="")
        {
            $formdata['language']=$formdata['language'].",".$v2;
        }
        if($v3!="")
        {
            $formdata['language']=$formdata['language'].",".$v3;
        }
        $jsondata=json_encode($formdata,JSON_PRETTY_PRINT);
        if(file_put_contents("files/mydata.json",$jsondata))
        {
            echo "Successfully data saved<br>";
        }
        else
        {
            echo "No data saved<br>";
        }
        $validatefname=$name1;
        $validatelname=$name2;
        $validateage=$age1;
        $validateradio=$_REQUEST["designation"];
        $validateemail=$email;
        $validatepassword=$password1;
    }





}
?>