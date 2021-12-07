function JsValidation()
{
    var name=document.getElementById("name").value;

    var department=document.getElementById("department").value;

    var date=document.getElementById("date").value;

    var salary=document.getElementById("salary").value;

    var my2 =/^[a-zA-Z ]*$/;
    if (!my2.test(name))
    {
         document.getElementById("error").innerHTML="Name should be alphabet";
         return false;
    }
    
    if(name=="")
   {
       document.getElementById("error").innerHTML="Name cannot be empty";
       return false;
   }
  
   if(name.length<=8)
   {
       document.getElementById("error").innerHTML="Name should not less then or equal 8";
       return false;
   }
   if(department=="")
   {
       document.getElementById("error").innerHTML="Department cannot be empty";
       return false;
   }
   var my3 =/^[a-zA-Z ]*$/;
   if (!my3.test(department))
   {
        document.getElementById("error").innerHTML="Department should be numeric";
        return false;
   }
   if(date==="")
   {
       document.getElementById("error").innerHTML="Date cannot be empty";
       return false;
   }
   if(salary=="")
   {
       document.getElementById("error").innerHTML="salary cannot be empty";
       return false;
   }

   if(isNaN(salary))
   {
       document.getElementById("error").innerHTML="Salary should be numeric";
       return false;
   }

    
    return true;
}


   
