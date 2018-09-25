
//Slideshow pause button
var playing = true; //whether or not auto play is on
var pausePlay = document.getElementById ('play'); //play button
var next = document.getElementById ('next'); //next button
var previous = document.getElementById ('prev');  //previous button
var slideIndicators = document.getElementById ('slide-indicators'); //slide indicators at bottom of screen
var indicators = document.querySelectorAll ('.indicator'); //make a variable from the indicator tabs


//if next button is clicked, pause the slideshow and advance to next slide
next.onclick = function() {
	pauseSlideShow ();
	nextSlide ();
};

//if the window is scrolled past mid-way, pause the slide-show
window.addEventListener("scroll", scrollPause);

function scrollPause() {
	if (window.pageYOffset > 400) {
		pauseSlideShow();
	}
}

//if previous button is clicked, pause the slideshow and go back to previous slide
previous.onclick = function() {
	pauseSlideShow ();
	previousSlide ();
	pauseScroll = false;
};
//when any slide indicator is clicked, pause slideshow
slideIndicators.onclick = function() {
	pauseSlideShow();
	pauseScroll = false;
}

//when pauseSlideShow function is called, set playing to false and clear interval timer
function pauseSlideShow() {
	playing = false;
	clearInterval(slideInterval);
	document.getElementById("play").style.display = "block";
	slides[currentSlide].className = 'slide showing';
}
//when playSlideShow function is called, set playing to true and start up interval timer
function playSlideShow() {
	playing = true;
	slideInterval = setInterval(nextSlide, 7000);
	document.getElementById("play").style.display = "none";
}
//pause slideshow when the background image is clicked
function startStop() {
	if (playing) {
		pauseSlideShow();
		pauseScroll = false;
	};
}

//when play button is clicked, start or stop the slideshow, and go to next slide
pausePlay.onclick = function() {
    if (playing) {
    pauseSlideShow();
	} else {
		playSlideShow();
	};
	nextSlide ();
  };
//Slideshow auto-advance

var slides = document.querySelectorAll('#home-slider .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,7000);

function nextSlide() {
    goToSlide(currentSlide+1);
}

function previousSlide() {
    goToSlide(currentSlide-1);
}

function goToSlide(n) {
    slides[currentSlide].className = 'slide kenburns fadeout';
    indicators[currentSlide].className = "indicator";
    currentSlide = (n+slides.length)%slides.length;
    if (playing) {
    	slides[currentSlide].className = 'slide showing kenburns fadeout';
    } else {
    	slides[currentSlide].className = 'slide showing';
    };
    
    //make the indicator of the current slide active
	indicators[currentSlide].className = "indicator active";
	resetSlide = (currentSlide+1)%slides.length;
	slides[resetSlide].className = 'slide';
}

//---------------------------------- Product Slider ----------------------------//

var running = true;
var thumbSelect = document.querySelectorAll('#slider-thumbnails > div');
var thumbGroup = document.getElementById('slider-thumbnails');

thumbGroup.onclick = function() {
	if (running = true) {
		pauseAdvance();
	}
}

function pauseAdvance() {
	running = false;
	clearInterval(picInterval);
}
// function resumeAdvance() {
// 	running = true;
// 	picInterval = setInterval(nextPic, 4000);
// }

var bigPic = document.querySelectorAll('.indiv-img');
var currentPic = 0;
var infoBox = document.querySelectorAll('#slider-product-info > div');
var currentBox = 0;	
var currentThumb = 0;
var picInterval = setInterval(nextPic, 4000);

function nextPic() {
	goToProduct(currentPic+1);
}

function goToProduct(n) {
	bigPic[currentPic].className = 'indiv-img bottom';
	currentPic = (n+bigPic.length)%bigPic.length;
	bigPic[currentPic].className = 'indiv-img middle';
	infoBox[currentBox].className = 'info-right';
	currentBox = (n+infoBox.length)%infoBox.length;
	infoBox[currentBox].className = 'info-center';
	thumbSelect[currentThumb].className = '';
	currentThumb = (n+thumbSelect.length)%thumbSelect.length;
	thumbSelect[currentThumb].className = 'highlighted';	
}

//__________________________ Blog Slider __________________________________//
var blogSlides = document.querySelectorAll('.blogslide');
var currentBlogSlide = 0;
var blogSlideInterval = setInterval(slideAdvance, 4000);

function slideAdvance() {
	goToBlog(currentBlogSlide+1);
}

function goToBlog(n) {
	blogSlides[currentBlogSlide].className = 'blogslide';
	currentBlogSlide = (n+blogSlides.length)%blogSlides.length;
	blogSlides[currentBlogSlide].className = 'blogslide turn';
}

