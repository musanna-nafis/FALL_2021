<html>
<body>
 <table>
  <form action="" onsubmit="return myValidation()" method="POST">

    <h1>Registration Form</h2><hr/>
    <tr>
        <td>First Name:</td>
        <td><input type="text" id="fname" name="fname"></td>
        <td><p id="a1"></p></td> 
        <td><p id="wrong"></p></td> 
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><input type="text" id="lname" name="lname"></td>
        <td><p id="a2"></p></td>
       
    </tr>

    <tr>
        <td>Age:</td>
        <td><input type="text" id="age" name="age"></td>
        <td><p id="a3"></p></td>
       
       
    </tr>

    <tr>
    <td> Designation:</td>
    <td> 
    
    <input type="radio" id="d1" name="designation" value="Junior Programmer">
    <label for="designation">Junior Programmer</label>
    <input type="radio" id="d2" name="designation" value="Senior Programmer">
    <label for="designation">Senior Programmer</label>
    <input type="radio" id="d3" name="designation" value="Project Lead">
    <label for="designation">Project Lead</label>

    </td>
   </tr>   
   <tr>
    <td>Preferred Language:</td>
    <td>
     <input type="checkbox" id="l1" name="l1" value="Java"> Java
     <input type="checkbox" id="l2" name="l2" value="PHP"> PHP
    <input type="checkbox"  id="l3" name="l3" value="C++"> C++
    </td>
    <td><p id="a7"></p></td>

</tr>
<tr>
        <td>E-mail:</td>
        <td><input type="email" id="email" name="email"></td>
        <td><p id="a5"></p></td>
</tr>
<tr>
        <td>Password:</td>
        <td><input type="password" id="password" name="password"></td>
        <td><p id="a6"></p></td>
</tr>
<tr>  
<td>Please choose a file:</td>
<td><input type="file" id="image" name="image"></td>
<td><p id="a4"></p></td>
</tr>
<tr>
<td>
<input type="submit" name="submit">
<input type="reset" name="reset">
</td>
</tr>
</form>
</table>
<script type="text/javascript" src="../js/myjs.js"></script>
</body>
</html>