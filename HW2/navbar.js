function expandNav() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
    var y = document.getElementById("myBanner");
    if (y.className === "banner") {
      y.className += " responsive";
    } else {
      y.className = "banner";
    }
}
