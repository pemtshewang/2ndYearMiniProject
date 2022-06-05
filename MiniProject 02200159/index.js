function verifyPassword() {  
  var pw = document.getElementById("pwd").value;  
  var verify=document.getElementById("pass").value;
  //check empty password field  
  if(pw == "") {  
     window.alert("Fill all the necessary passwords");
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     window.alert("**Password length must be atleast 8 characters");
     return false;  
  }  
//maximum length of password validation  
  if(pw.length > 15) {  
     window.alert("**Password length must not exceed 15 characters");
     return false;  
  }
  if(pwd !== verify)
  {
      window.alert("Password verfication failed!");
  }
}