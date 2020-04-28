/*navigation bar indicator */
function menuBar() {
  var x = document.getElementById("navH");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}