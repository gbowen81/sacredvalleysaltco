<script>

function primaryActive() {
	var anchor = document.getElementsByTagName("a");
	for(i=0;i<anchor.length;i++) {
		if(document.location.href.indexOf(anchor[i].href)>=0) {
      anchor[i].className += 'a-active';
  		}
	}
	var item = document.getElementsByClassName("menuitem");
	if (item.includes("a.a-active")) {
		(this).className += "liactive";
	}
}
	


window.onload = primaryActive();

</script>

<script>

function primaryActive() {
	var item = document.getElementsByClassName("menuitem");
	var licount = item.length;

	var xref = document.getElementsByTagName("a").href;
	xref.toString();

	document.getElementById("jsvariables").innerHTML = licount;

}


window.onload = primaryActive();

</script>


<script src="/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>


<script>
$(function(){
  $('li').each(function() {
    if ($(this).find("a.pagehighlight").prop('href') == window.location.href) {
      $(this).addClass('liactive');
    } else if ($(this).find("a.pagehighlight1").prop('href') == window.location.href) {
      $(this).addClass('liactive');
    } else if ($(this).find("a.pagehighlight2").prop('href') == window.location.href) {
      $(this).addClass('liactive');
    } else if ($(this).find("a.pagehighlight3").prop('href') == window.location.href) {
      $(this).addClass('liactive');
    }
  });
});



window.onscroll = function() {
	if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
		pauseSlideShow();
	} else if (document.body.scrollTop < 500 || document.documentElement.scrollTop < 500) {
		playSlideShow();
	}
}




window.onscroll = function() {
	if (document.documentElement.scrollTop < 400 || document.body.scrollTop < 400) {
		document.getElementsByClassName("testimonial-section").className += ' paused';
	} else if ((document.documentElement.scrollTop >= 400 && document.element.scrollTop < 900) || (document.body.scrollTop >= 400 && document.body.scrollTop < 900)) {
		document.getElementsByClassName("testimonial-section").className -= ' paused';
	} else if (document.documentElement.scrollTop >= 900 || document.body.scrollTop >= 900) {
		document.getElementsByClassName("testimonial-section").className += ' paused';
	}
}



function scrollStart() {
	if ((pauseScroll = true) && (window.pageYOffset <= 400)) {
		playSlideShow();
		pauseScroll = false;
	}
}

var playPause = document.getElementById("play-pause")

function playToggle() {
	if (running = true) {
		playPause.className = 'play-pause showpause';
	} else if (running = false) {
		playPause.className = 'play-pause showplay';
	}
}

</script>
