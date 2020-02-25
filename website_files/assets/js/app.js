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

// video models
$("#modal1").on("hidden.bs.modal", function(e) {
  // do something...
  $("#modal1 iframe").attr("src", $("#modal1 iframe").attr("src"));
});

$("#modal2").on("hidden.bs.modal", function(e) {
  // do something...
  $("#modal2 iframe").attr("src", $("#modal2 iframe").attr("src"));
});

$("#modal3").on("hidden.bs.modal", function(e) {
  // do something...
  $("#modal3 iframe").attr("src", $("#modal3 iframe").attr("src"));
});
$("#modal4").on("hidden.bs.modal", function(e) {
  // do something...
  $("#modal4 iframe").attr("src", $("#modal4 iframe").attr("src"));
});

$("#modal5").on("hidden.bs.modal", function(e) {
  // do something...
  $("#modal5 iframe").attr("src", $("#modal5 iframe").attr("src"));
});

$("#modal6").on("hidden.bs.modal", function(e) {
  // do something...
  $("#modal6 iframe").attr("src", $("#modal6 iframe").attr("src"));
});

// share button functions
document.addEventListener("DOMContentLoaded", function(event) {
  // Uses sharer.js
  var url = window.location.href;
  var title = document.title;
  var subject = "Spread The World";
  var via = "yourTwitterUsername";
  //console.log( url );
  //console.log( title );

  //facebook
  $("#share-fb")
    .attr("data-url", url)
    .attr("data-sharer", "facebook");
  //twitter
  $("#share-tw")
    .attr("data-url", url)
    .attr("data-title", title)
    .attr("data-via", via)
    .attr("data-sharer", "twitter");
  //linkedin
  $("#share-li")
    .attr("data-url", url)
    .attr("data-sharer", "linkedin");

  //Prevent basic click behavior
  $(".sharer button").click(function() {
    event.preventDefault();
  });
});
