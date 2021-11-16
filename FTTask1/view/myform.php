<?php include "../control/myvalidation.php"; ?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../mycss/mycss.css">
</head>
<body>

<div class="abcwe">
<h1>ABC Management System</h1>
<h2>We Create Future</h2>
  </div>
  
 <div class="s">
<div class="top">
  <a href="#">Home</a> <a href="#">About US</a> <a href="#">Shop</a>
 </div>
 </div>
<div class="Border" >
 <div class="registration"><h3>Registration Form</h3></div>
</div>


<hr>


  <form action="" method="POST">
  <table id="tablecolor">
  
    <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname"></td>
        <td><?php echo  $validatefname; ?></td> 
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname"></td>
        <td><?php echo  $validatelname; ?></td>
       
       
    </tr>

    <tr>
        <td>Age:</td>
        <td><input type="text" name="age"></td>
        <td><?php echo  $validateage; ?></td>
       
       
    </tr>

    <tr>
    <td> Designation:</td>
    <td> 
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer

    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer

    <input type="radio" name="designation" value="Project Lead"> Project Lead

    <td><?php echo  $validateradio; ?></td>
    </td>
   </tr>   
   <tr>
    <td>Preferred Language:</td>
    <td>
     <input type="checkbox" name="l1" value="Java"> Java

     <input type="checkbox" name="l2" value="PHP"> PHP

    <input type="checkbox"name="l3" value="C++"> C++

    <td><?php echo   $validatecheckbox ?></td>
 <td>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
</td>
</td>
</tr>
<tr>
        <td>E-mail:</td>
        <td><input type="email" name="email"></td>
        <td><?php echo  $validateemail; ?></td>
</tr>
<tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
        <td><?php echo  $password; ?></td>
</tr>
<tr>  
<td>Please choose a file:</td>
<td><input type="file" name="image"></td>
</tr>

</table>

<input class="submit" type="submit" name="submit">
<input class="reset" type="reset" name="reset">


</form>




</body>
</html>