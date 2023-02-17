const loginForm = document.getElementById("login-form");
const user = document.getElementById("userName");
const pass = document.getElementById("passWord");



loginForm.addEventListener('submit',(e) =>{
    e.preventDefault();
    let userName = user.value;
    let passWord = pass.value;
        
         if(userName == "user" && passWord == "password123")
         {
             alert("Login Succesfully");
             window.location = "dashboard.html";
             return false;
         }
         else{
             alert("Login Error");
             return false;
         }
})





