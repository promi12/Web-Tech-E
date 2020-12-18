function validate(){  
      var name=document.f1.name.value;  
      var passwordlength=document.f1.password.value.length;
      var email=document.f1.email.value;
      var username=document.f1.username.value;
      var repassword=document.f1.repassword.value;
      var BirthDay=document.f1.BirthDay.value;
      //var BirthMonth=document.f1.BirthMonth.value;
      var BirthYear=document.f1.BirthYear.value;
      var phone=document.f1.phone.value;
      //var gender=document.f1.gender.value;


      var status=false;  
      if(name==""){  
      document.getElementById("namelocation").innerHTML="Please enter your name";  
      status=false;
      }else{  
      document.getElementById("namelocation").innerHTML="";  
      status=true;
      }
        
      if(passwordlength<6){  
      document.getElementById("passwordlocation").innerHTML="Password must be greater than 6";  
      status=false; 
      }else{  
      document.getElementById("passwordlocation").innerHTML="";  
      status=true;
      }

      if(repassword==""){  
      document.getElementById("repasswordlocation").innerHTML="Please retype the password";  
      status=false;
      }else{
        if(password != repassword)
        {
          document.getElementById("repasswordlocation").innerHTML="Password not mached";
          status=false;
        }else{
          document.getElementById("repasswordlocation").innerHTML="";  
          status=true;
        }
      }

      if(username==""){  
      document.getElementById("unamelocation").innerHTML="Please enter a User Name";  
      status=false;
      }else{  
      document.getElementById("unamelocation").innerHTML="";  
      status=true;
      }

      if(email=="") {
          document.getElementById("emaillocation").innerHTML="Please enter your email address";
          status=false;
      } else {
          var regex = /^\S+@\S+\.\S+$/;
          if(regex.test(email) === false) {
            document.getElementById("emaillocation").innerHTML="Please enter vaild email address";
            status=false;
          } else{
              document.getElementById("emaillocation").innerHTML="";
              status=true;
          }
      }

      /*if(BirthMonth==""){  
      document.getElementById("monthlocation").innerHTML="Please Select a month";  
      status=false;
      }else{  
      document.getElementById("monthlocation").innerHTML="";  
      status=true;
      }*/

      if(BirthDay==""){  
      document.getElementById("datelocation").innerHTML="Please enter a date";  
      status=false;
      }else{  
      document.getElementById("datelocation").innerHTML="";  
      status=true;
      }

      if(BirthYear==""){  
      document.getElementById("yearlocation").innerHTML="Please enter a year";  
      status=false;
      }else{  
      document.getElementById("yearlocation").innerHTML="";  
      status=true;
      }

      if(phone==""){  
      document.getElementById("phonelocation").innerHTML="Please enter your number";  
      status=false;
      }else{  
      document.getElementById("phonelocation").innerHTML="";  
      status=true;
      }

      /*if(gender==""){  
      document.getElementById("genderlocation").innerHTML="Please enter your gender";  
      status=false;
      }else{  
      document.getElementById("genderlocation").innerHTML="";  
      status=true;
      }*/
        
      return status;  
    }