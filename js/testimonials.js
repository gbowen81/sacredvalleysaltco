//Assign classes to divs based on the length of the quotes//
function quoteLength() {
	var excerpts = document.getElementsByClassName("testimonial-excerpt");

	for (i=0;i<excerpts.length;i++) {
		if (excerpts[i].textContent.length < 40) {
			excerpts[i].className += ' sm';
		} else if (excerpts[i].textContent.length >= 40 && excerpts[i].textContent.length < 90) {
			excerpts[i].className += ' md';
		} else if (excerpts[i].textContent.length >= 90 && excerpts[i].textContent.length < 120) {
			excerpts[i].className += ' lg';
		} else if (excerpts[i].textContent.length >= 120) {
			excerpts[i].className += ' xl';
		}
	}
	var testimonials = document.getElementsByClassName("testimonial");
	
	for (i=0;i<testimonials.length;i++) {
		var w = testimonials[i].getElementsByClassName("sm");
		if (w.length > 0) {
			testimonials[i].className += ' short';
		}
		var x = testimonials[i].getElementsByClassName("md");
		if (x.length > 0) {
			testimonials[i].className += ' medium';
		}
		var y = testimonials[i].getElementsByClassName("lg");
		if (y.length > 0) {
			testimonials[i].className += ' long';
		}
		var z = testimonials[i].getElementsByClassName("xl");
		if (z.length > 0) {
			testimonials[i].className += ' reallong';
		}
	}
}

quoteLength();

//Turn off marquee animation when not in the middle of the screen//	
window.addEventListener("scroll", abovePause);
var position

function abovePause() {
	if (window.pageYOffset < 300) {
		document.getElementById("marquee").className = "testimonial-section paused";
		position = 1;
	} else if (window.pageYOffset >= 300 && window.pageYOffset < 900) {
		document.getElementById("marquee").className = "testimonial-section";
		position = 2;
	} else if (window.pageYOffset >= 900) {
		document.getElementById("marquee").className = "testimonial-section paused";
	}
}