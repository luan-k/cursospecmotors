import { Fancybox } from "@fancyapps/ui";
import "../../../node_modules/@fancyapps/ui/dist/fancybox/fancybox.css";
import { pt } from "@fancyapps/ui/dist/fancybox/l10n/pt.esm.js";

import { Carousel } from "@fancyapps/ui/dist/carousel/carousel.esm.js";
import "@fancyapps/ui/dist/carousel/carousel.css";

const servicesContainer = document.getElementById("myCarousel");

Fancybox.bind('[data-fancybox="gallery"]', {
	l10n: pt,
});

if (servicesContainer) {
	const options = {
		slidesPerPage: 2,
		infinite: false,
		Dots: false,
		Navigation: {
			prevEl: ".custom-prev-button",
			nextEl: ".custom-next-button",
		},
	};

	new Carousel(servicesContainer, options);
}
