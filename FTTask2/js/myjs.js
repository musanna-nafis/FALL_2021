
function myValidation()
{






   var fname=document.getElementById("fname").value;
   var lname=document.getElementById("lname").value;
   var email=document.getElementById("email").value;
   var password=document.getElementById("password").value;
   var age=document.getElementById("age").value;
   var my = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;

   if(fname=="")
   {
       document.getElementById("wrong").innerHTML="Please enter your first name";
       return false;
   }
   if(fname.length<5)
   {
       document.getElementById("wrong").innerHTML="First name should not less than 5 character";
       return false;
   }
   var my1 =/^[a-zA-Z ]*$/;
   if (!my1.test(fname))
   {
        document.getElementById("wrong").innerHTML="First name should be alphabet";
        return false;
   }

   if(lname=="")
   {
       document.getElementById("wrong").innerHTML="Please enter your last name";
       return false;
   }
   if(lname.length<5)
   {
       document.getElementById("wrong").innerHTML="Last name should not less than 5 character";
       return false;
   }
   var my2 =/^[a-zA-Z ]*$/;
   if (!my2.test(lname))
   {
        document.getElementById("wrong").innerHTML="Last name should be alphabet";
        return false;
   }

   if(email=="")
   {
       document.getElementById("wrong").innerHTML="Email can not be empty";
       return false;
   }
   if(!my.test(email))
   {
        document.getElementById("wrong").innerHTML="Email is not valid";
        return false;
   }

   if(password=="")
   {
       document.getElementById("wrong").innerHTML="You must enter password";
       return false;
   }
   if(password.length<8)
   {
       document.getElementById("wrong").innerHTML="Password should be at least 8 characters";
       return false;
   }
   if (document.getElementById("d1").checked==false && document.getElementById("d2").checked==false && document.getElementById("d3").checked==false)
   {
        document.getElementById("wrong").innerHTML="Please select your designation";
        return false;
   }
   if (document.getElementById("l1").checked==false && document.getElementById("l2").checked==false && document.getElementById("l3").checked==false )
   {
        document.getElementById("wrong").innerHTML="Please select at least one language";
        return false;
   }

   if(age=="")
   {
       document.getElementById("wrong").innerHTML="Please enter your age";
       return false;
   }
   if(isNaN(age))
   {
       document.getElementById("wrong").innerHTML="Age should be numeric";
       return false;
   }


   else
   {

       
       var designation="";
       var l1="";
       var l2="";
       var l3="";
       var count=0;
       var total="";
       if(document.getElementById("l1").checked==true)
       {
           l1="JAVA";
           count++;
           total=total+l1+" , ";
       }
       if(document.getElementById("l2").checked==true)
       {
           l2="PHP";
           count++;
           total=total+l2+" , ";
       }
       if(document.getElementById("l3").checked==true)
       {
           l3="C++";
           count++;
           total=total+l3;
       }



       if(document.getElementById("d1").checked==true)
       {
           designation="Junior Programmer";
       }
       else if(document.getElementById("d2").checked==true)
       {
           designation="Senior Programmer";
       }
       else if(document.getElementById("d3").checked==true)
       {
          designation="Project Lead";
       }

       document.getElementById("wrong").innerHTML=""; 
       document.getElementById("a1").innerHTML="First Name: "+fname;
       document.getElementById("a2").innerHTML="Last Name: "+lname;
       document.getElementById("a3").innerHTML="Age: "+age;
       document.getElementById("a4").innerHTML="   "+"Designation: "+designation;
       document.getElementById("a5").innerHTML="Email: "+email;
       document.getElementById("a6").innerHTML="Password: "+password;
       
       
       if(count==1)
       {
           if(l1!="")
           {
              document.getElementById("a7").innerHTML="Language: "+l1;
           }
           else if(l2!="")
           {
              document.getElementById("a7").innerHTML="Language: "+l2;
           }
           else if(l3!="")
           {
              document.getElementById("a7").innerHTML="Language: "+l3;
           }
       }

       else
       {
          document.getElementById("a7").innerHTML="Language: "+total;

       }
       
       
       return false;

   }
  
  

     return true;
}
