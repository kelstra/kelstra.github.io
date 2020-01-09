/*
Web Developer : George Okello
Year : 2013
*/

jQuery(function( $ ){

  // Adds hover psuedo class functionality, for list items, in Internet Explorer 6
  sfHover = function() {
    var sfEls = document.getElementById("menu").getElementsByTagName("li");
    for (var i=0; i<sfEls.length; i++) {
      sfEls[i].onmouseover=function() {
        this.className+=" sfhover";
      }
      sfEls[i].onmouseout=function() {
        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
      }
    }
  }

  // Event Tabs Scroll
	function jumpTo (clickTarget, jumpTarget, vPos) {
		$(clickTarget).bind('click',
			function(event) {
        $(jumpTarget).scrollTop(vPos);
				event.preventDefault();	// Stops entire viewport scrolling to the target.
			}
		)
    
		$(clickTarget).bind('mousedown',
			function(event) {
        $(clickTarget).css({"outline-width":"0"});
			}
		)

	}

/* --------------------  MAIN  ------------------------ */
  $(document).ready(function() {
    $("#events a").attr("tabindex", "-1"); // Removes #events links from the tab index
    jumpTo ('#events .tab-bar li.one a','#events', 0);
    jumpTo ('#events .tab-bar li.two a','#events', 320);
    jumpTo ('#events .tab-bar li.three a','#events', 640);

    if ($('html').hasClass('lt-ie7')) {
      $(sfHover);
      $("a.jaklightbox").removeAttr("onclick"); // Disables gallery lightbox
    }    

    var pattern = /photo-gallery/;
    
    if ( pattern.test(location.href) ) {
      var links = document.getElementsByTagName('a');
      var parent = '';
      var pnt = '';
      var pattern = /phoca.cz/i;
      var pattern2 = /powered by/i;
 
      for ( var i = 0; i < links.length; i++ ) {
        if ( pattern.test(links[i].href) ) {
          links[i].href = '';
          links[i].style.display = 'none';
          parent = links[i].parentNode;
          if ( parent ) {
            pnt = parent.textContent || parent.innerText;
            if ( pattern2.test(pnt) ) {
              parent.style.display = 'none';
            }
          }
        }
      }
    }
  });
  
  $(window).load(function() {
    // Wait for all images to load
    $('#slides').cycle({ speed: 1000, timeout: 8000 });
    $('#slides-mv').cycle({ speed: 1000, timeout: 4000 });
  });
  
});




