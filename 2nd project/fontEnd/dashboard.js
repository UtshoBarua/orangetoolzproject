const userList = document.querySelector("#userList");
const register = document.querySelector("#register");
const logout = document.querySelector("#logout");

userList.addEventListener("click",()=>{location.href='./dashboard.php'});
register.addEventListener("click",()=>{location.href='./createNewUser.html'});
logout.addEventListener("click",()=>{location.href='./login.php'});
