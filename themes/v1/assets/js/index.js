document.addEventListener(
  "DOMContentLoaded",
  function() {
    window.scrollTo(0, 0);
    var nav = document.getElementById("nav");
    var intro = document.getElementById("intro");
    var originalOffset = nav.offsetTop;

    window.addEventListener("scroll", function(evt) {
      if (window.scrollY > originalOffset) {
        nav.classList.add("sticky");
        intro.classList.add("sticky");
      } else {
        nav.classList.remove("sticky");
        intro.classList.remove("sticky");
      }
    });
  },
  false
);
