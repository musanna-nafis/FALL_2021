<?php
include("../model/db.php");
$myname="";$mydepartment="";$mydate="";$mysalary="";
$msg="";

if(isset($_REQUEST["search"]))
{
  $connection = new db();
  $conobj=$connection->OpenCon();
  $myresult=$connection->SEBI($conobj,"employee",$_REQUEST["id"]);

  if($myresult->num_rows>0)
  {
        while($row=$myresult->fetch_assoc())
        {
          $myname=$row["Name"];
          $mydepartment=$row["Department"];
          $mydate=$row["JoiningDate"];
          $mysalary=$row["Salary"];
        }
} 
$connection->CloseCon($conobj);

}
if(isset($_REQUEST["update"]))
{
  $connection = new db();
  $conobj=$connection->OpenCon();
  $myresult=$connection->SEBN($conobj,"employee",$_REQUEST["id"],$_REQUEST["name"],$_REQUEST["department"],$_REQUEST["date"],$_REQUEST["salary"]);
  $connection->CloseCon($conobj);


}


?>