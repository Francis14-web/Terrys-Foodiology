const adminForm = document.getElementById("admin-login");
const username = document.getElementById("adminlog");
const password = document.getElementById("passwordlog");


adminForm.addEventListener('submit' ,(e) =>{
    e.preventDefault();

    let adminUsername = username.value;
    let adminPassword = password.value;

    if( adminUsername == "admin" && adminPassword == "passwordadmin")
    {
        alert("Admin Log in Successfully");
        window.location = "dashboard.html";
        return false;
    }
    else
    {
        alert("Admin Log in Failed!");
        return false;
    }
})