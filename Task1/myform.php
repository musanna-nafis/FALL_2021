<?php include "myvalidation.php"; ?>
<html>
<body>

 <table>
  <form action="" method="POST">

    <h1>Registration Form</h2><hr/>
    <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname"></td>
        <td><?php echo  $validatefname; ?><br><br></td> 
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname"></td>
        <td><?php echo  $validatelname; ?><br><br></td>
       
       
    </tr>

    <tr>
        <td>Age:</td>
        <td><input type="text" name="age"></td>
        <td><?php echo  $validateage; ?><br><br></td>
       
       
    </tr>

    <tr>
    <td> Designation:</td>
    <td> 
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer

    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer

    <input type="radio" name="designation" value="Project Lead"> Project Lead

    <td><?php echo  $validateradio; ?><br><br></td>
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
        <td><?php echo  $validateemail; ?><br><br></td>
</tr>
<tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
        <td><?php echo  $password; ?><br><br></td>
</tr>
<tr>  
<td>Please choose a file:</td>
<td><input type="file" name="image"></td>
</tr>
<tr>
<td>
<input type="submit" name="submit">
<input type="reset" name="reset">
 
</td>

</tr>

</form>
</table>
</body>
</html>