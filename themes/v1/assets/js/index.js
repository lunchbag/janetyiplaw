document.addEventListener(
  "DOMContentLoaded",
  function() {
    // Sticky navigation
    window.scrollTo(0, 0);
    var top = document.getElementById("top");
    var navOffset = document.getElementById("nav-offset");
    var topHeight = top.offsetHeight;
    var triggerPoint = top.offsetHeight + 100;

    window.addEventListener("scroll", function() {
      if (window.scrollY > triggerPoint) {
        top.classList.add("sticky");
      } else if (window.scrollY > topHeight) {
        top.classList.add("offset");
        navOffset.classList.add("sticky");
      } else if (window.scrollY === 0) {
        top.classList.remove("offset");
        top.classList.remove("sticky");
        navOffset.classList.remove("sticky");
      }
    });

    // Expandable image preview
    var images = document.querySelectorAll("img.expandable");
    var previewDialog = document.getElementById("preview");
    var imageToPreview = document.getElementById("img-preview");
    var closeBtn = document.getElementById("img-close");
    for (let i = 0; i < images.length; i++) {
      images[i].addEventListener("click", function(e) {
        console.log("clicked");
        // Freeze background
        document.body.classList.add("no-scroll");
        // Show preview
        previewDialog.classList.add("visible");
        // Inject image link
        imageToPreview.src = "/lifetimes.jpg";
      });
    }
    // Close button handler
    closeBtn.addEventListener("click", function(e) {
      closePreview();
    });
    // Escape key handler
    document.onkeydown = function(evt) {
      evt = evt || window.event;
      ((evt.key && (isEscape = evt.key == "Escape" || evt.key == "Esc")) ||
        evt.keyCode == 27) &&
        closePreview();
    };
    function closePreview() {
      previewDialog.classList.remove("visible");
      document.body.classList.remove("no-scroll");
    }
  },
  false
);
