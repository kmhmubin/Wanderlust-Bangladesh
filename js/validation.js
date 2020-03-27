const form = document.getElementById("form");
const username = document.getElementById("exampleInputUser");
const password = document.getElementById("exampleInputPassword");

// event listeners
form.addEventListener("submit", function(e) {
  e.preventDefault();

  if (username.value === "" || username.value == null) {
    document.getElementById("username_valid").innerHTML = "Username required";
    return false;
  }

  if (password.value === "" || password.value == null) {
    document.getElementById("password_valid").innerHTML = "Password required";
  }
});
