/*Highlight menu link to the current page*/
function primaryActive() {
  var current = window.location.href;
  var anchor = document.getElementsByClassName("mitem");
  for(i=0;i<anchor.length;i++) {
    if(anchor[i].href == current) {
      anchor[i].className += ' a-active';
      }
  }

  var act = document.getElementsByClassName("a-active");
  var item = document.getElementsByClassName("menuitem");
  for (i=0;i<item.length;i++) {
    var x = item[i].getElementsByClassName("a-active");
    if (x.length>0) {
      item[i].className += ' liactive';
    }
  }
}
  
primaryActive();

/*mobile menu*/
/* Open */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

