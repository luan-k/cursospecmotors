/* ======= Slider start ======= */
/* make a loop that checks if a radio if one of the is checked, then
    wait 5 seconds and go to the other*/
jQuery(document).ready(function ($) {
  $(document).ready(function () {
    window.addEventListener("load", function () {
      linkst = document.getElementsByTagName("a")[16];
      linksn = document.getElementsByTagName("a")[17];
      nextBtn = document.getElementsByClassName("next half");

      linkst.classList.add("click-link-style");
      linksn.classList.add("click-link-style");

      linkst.removeAttribute("href");
      linksn.removeAttribute("href");

      var arrSlider = [linkst, linksn];
      /* console.log( arrSlider); */

      function checkSlider() {
        for (i = 0; i < arrSlider.length; i++) {
          if (arrSlider[i].classList.contains("selected")) {
            /* arrSlider[i].classList.remove("selected"); */
            if (arrSlider[i + 1]) {
              arrSlider[i + 1].click();
              /* arrSlider[i+1].classList.add("selected"); */
            } else {
              arrSlider[0].click();
              /* arrSlider[0].classList.add("selected"); */
            }
            return;
          } else {
          }
        }
      }
      setInterval(checkSlider, 6000);
    });
  });
});
