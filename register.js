function functionName()
{
  
     
//first name validation
    
    var x = document.getElementById('fn').value;
    if (x=="") {  document.getElementById('errors first name').innerHTML="*Please enter a First Name*";
                            
    return false;
	}
    if(!isNaN(x))
    {
    document.getElementById("errors first name").innerHTML="*Please enter alphabet*";
    return false;
    }
    document.getElementById("errors first name").style.display="none";

//last name validation
			
    var x1=document.getElementById('ln').value;
    if(x1=="")
        {document.getElementById("errors last name").innerHTML="*Please enter last name*";
                            
         return false;
        }

    if(!isNaN(x1))
        {
           document.getElementById("errors last name").innerHTML="*Please enter alphabet*";
            return false;
        }
    document.getElementById("errors last name").style.display="none";

//dropdown validatation

    var day=document.getElementById("day").selectedIndex;
    var month=document.getElementById("month").selectedIndex;
    var year=document.getElementById("year").selectedIndex;
    if(month=="")
    {
        document.getElementById("errors dob").innerHTML="*Give month"; 
        return false;
    }
    if(day=="")
    {
        document.getElementById("errors dob").innerHTML="*Give day*"; 
        return false;
      }
 
   if(year=="")
   {
      document.getElementById("errors dob").innerHTML="*Give year"; 
      return false;
     }
   document.getElementById("errors dob").style.display="none"; 

//gender validation

    var x3=document.getElementById("radio1").checked;
    var x4=document.getElementById("radio2").checked;
    if((x3 == false)&&(x4==false))
    {
        document.getElementById("errors radio").innerHTML="*Please select the gender*";
        return false;
    }
      document.getElementById("errors radio").style.display="none";

//email validation

    var x2=document.getElementById('eid').value;
    if(x2=="")
    { 
        document.getElementById("errors email").innerHTML="*Please enter email*";
        return false;
    }

     document.getElementById("errors email").style.display="none";

//password validation

    var x5=document.getElementById("password1").value;
    var x6=document.getElementById("password2").value;
    var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;  
    if(x5.match(decimal))   
     {  
         if(x5==x6) 
         {
           return true; 
         }
        else{
             document.getElementById("errors password1").innerHTML="*Password mismatch*";
             return false;
            }
      }  
    else  
    {   
         document.getElementById("errors password1").innerHTML="*Give password in standard format*"; 
         return false;  
     }  
     document.getElementById("errors password1").style.display="none"; 

//checkbox validation
    
  var x7=document.getElementById("checkbox1").checked;
    if(x7=="")
    {  
      
         document.getElementById("errors check").innerHTML="*Please select subscribe*";
         return false;
     }

   document.getElementById("errors check").style.display="none";
}



