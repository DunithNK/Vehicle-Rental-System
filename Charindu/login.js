//the function is called when you hit the 'login' button
function login() {
  // get the username and the password from the form
  var username = document.getElementById("username").Value;
  var password = document.getElementById("password").Value;

  //check if the username and password are empty
  if (username === "" || password === "") {
    alert("Enter your password and username");
    return;
  }
}
// Add an event listener to the "Login" button
document.getElementById("submit").addEventListener("click", login);
