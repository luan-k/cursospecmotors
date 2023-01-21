/* ======= Slider start ======= */
/* make a loop that checks if a radio if one of the is checked, then
    wait 5 seconds and go to the other*/
jQuery(document).ready(function ($) {
	$(document).ready(function () {
		window.addEventListener("load", function () {
			/* console.log(document.querySelectorAll("#slider-custom a")); */

			const arrSlider = document.querySelectorAll("#slider-custom a");

			arrSlider.forEach((arr) => {
				arr.removeAttribute("href");
			});

			function checkSlider() {
				for (i = 0; i < arrSlider.length; i++) {
					if (arrSlider[i].classList.contains("selected")) {
						if (arrSlider[i + 1]) {
							arrSlider[i + 1].click();
						} else {
							arrSlider[0].click();
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
