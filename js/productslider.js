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