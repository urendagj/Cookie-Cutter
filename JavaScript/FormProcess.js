//FormProcess.js
//The form data validation and display of the data

function FormProcess(){
    const name = document.getElementById("Username").value;
    const password = document.getElementById("Password").value;
    const Confirm = document.getElementById("Confirm").value;
    const EMail = document.getElementById("E-Mail").value;
    const EmailValid = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;
    
    
    
     
    
    //checks to see if the username is the required length
     if(name.length < 5){
         alert("Username must be 5 charecters long");
         return (false);
     }
    
       //checks to see if the pasword is the required length
     if(password.length < 5){
         alert("Password Must be at least 5 Charactors");
         return (false);
     }
    
     //checks to see if the passwords match
    if(password != Confirm){
        alert("Passwords do not match")
        return (false);
    } 
    
      //check to see if the email address is valid
         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(EMail)){
         return (true);
     }else{
         alert("You have entered an invalid email address!")
        return (false)
     }
    
    
    
   
    

    
  
    
    
     


    
      
    
   
    
                   
    
}