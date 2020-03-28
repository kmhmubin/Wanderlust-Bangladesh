function validation() {
  var firstName = document.getElementById("exampleFirstName").value;
  var lastName = document.getElementById("exampleLastName").value;
  var userName = document.getElementById("exampleInputUserName").value;
  var email = document.getElementById("exampleInputEmail").value;
  var password = document.getElementById("exampleInputPassword").value;
  var repeatPassword = document.getElementById("exampleRepeatPassword").value;

  // regex values
  var uName = /^[a-zA-Z\s]+$/;
  var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,20}$/;
  var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  // fname and lname valid
  if (firstName == "" && lastName == "") {
    document.getElementById("nameError").innerHTML =
      "Please fill the Name Field";
    return false;
  }
  // username valid
  if (userName == "") {
    document.getElementById("userError").innerHTML = "Username Required";
    return false;
  } else if (userName.length <= 2 || userName.length > 20) {
    document.getElementById("userError").innerHTML =
      "Username length must be between 2 and 20";
    return false;
  } else if (uName.test(userName) === false) {
    document.getElementById("userError").innerHTML = "Enter valid Name";
    return false;
  }
  // email valid
  if (email == "") {
    document.getElementById("emailError").innerHTML = "Email Required";
    return false;
  }

  // password valid
  if (password == "") {
    document.getElementById("passError").innerHTML = "Password Required ";
    return false;
  } else if (passw.test(password) === false) {
    document.getElementById("passError").innerHTML =
      "password contain at least one numeric digit, one uppercase and one lowercase letter and length 5 to 20";
    return false;
  }

  // confirm password valid
  if (repeatPassword == "") {
    document.getElementById("repeatPassError").innerHTML = "Password required";
    return false;
  } else if (password != repeatPassword) {
    document.getElementById("repeatPassError").innerHTML = "Password Not Match";
    return false;
  }
}
