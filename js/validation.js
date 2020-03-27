const form = document.getElementById("form");
const username = document.getElementById("exampleInputUser");
const password = document.getElementById("exampleInputPassword");

// event listeners
form.addEventListener("submit", function(e) {
  e.preventDefault();

  if (username.value === "") {
    document.getElementById("username_valid").innerHTML = "Username required";
    return false;
  } else {
  }
});
