function validation() {
    const userName = document.getElementById('uname');
        const password=document.getElementById('pwd');
       var regex = /^\S+@\S+\.\S+$/; 
       alert(userName);
        
if(userName == "") 
{
 document.getElementById('uErr').innerHTML= "<span style='color:red'><strong>Please enter username </strong></span>"
    //alert("fErr", "Please enter your name");
} 
// else
//  {
//     var regex = /^\S+@\S+\.\S+$/;               
//     if(regex.test(uname) === true) {
//         printError("uErr", "");
//         //nameErr = false;
//         return false;
//         //printError("fErr", "Please enter a valid name");
//       //  alert("Please enter a valid name");
//     } 
 else {
        // document.getElementById('uErr').innerHTML= "<span style='color:red'><strong>Please enter the valid mail</strong></span>"
        return false;
       
    }

if(password == "") 
{
    // printError("lErr", "Please enter your name");
     document.getElementById('pErr').innerHTML= "<span style='color:red'>Please enter your password</span>"
 }  
 else
  {
         printError("pErr", "");
        // nameErr = false;
        return false;
     }

}