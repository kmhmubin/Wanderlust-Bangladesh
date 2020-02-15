// This function will show the hidden text when read more button is click
function toggle(ele) {
  var cont = document.getElementById("hidden-text");
  if (cont.style.display == "block") {
    cont.style.display = "none";
    document.getElementById(ele.id).value = "Show DIV";
  } else {
    cont.style.display = "block";
    document.getElementById(ele.id).value = "Hide DIV";
  }
}
