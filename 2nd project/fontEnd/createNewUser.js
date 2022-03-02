const user = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const button = document.getElementById("register");
const form  = document.querySelector("form")

function fetchcall(){

  
    var data = new URLSearchParams();
    data.append("name",document.getElementById("name").value);
    data.append("email",document.getElementById("email").value);
    data.append("password",document.getElementById("password").value);

    fetch( "http://localhost/2nd%20project/backend/model.php",{
        method: "POST",
        body : data

    })
    .then(function(response) {
       /* console.log(response.status);*/
     location.href = "http://localhost/2nd%20project/fontEnd/dashboard.php";
        return response.text();
    })
    .then(function(text){
        console.log(text);
    })
    .catch(function(err){
        console.log(err);
    });
    user.value = " ";
    email.value = " ";
    password.value= "";
    return false;
    


}
