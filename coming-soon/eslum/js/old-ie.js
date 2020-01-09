"use strict";

var ieVersion = ( function() {
  var hc = document.documentElement.className;
  var version = 999;
  
  if (hc.match("lt-ie9")) {
    version = 8; // IE8
  }

  if (hc.match("lt-ie8")) {
    version = 7; // IE7
  }

  if (hc.match("lt-ie7")) {   
    version = 6; // IE6
  }
  
  return version;
} () );


function loadCss(url) {
  var head  = document.getElementsByTagName('head')[0];
  var link  = document.createElement('link');
  link.rel  = 'stylesheet';
  link.type = 'text/css';
  link.href = url;
  link.media = 'all';
  head.appendChild(link);
}

function ieDesktop() {
  var width = document.documentElement.clientWidth;
  
  if ( width > 1006 ) { // 1007px + 17px scrollbar = 1024px
    loadCss('css/site-old-ie.css');
  } 
}

// Main
try {
  if ( ieVersion < 8 ) {
    ieDesktop();
  }
}
catch (j) { alert('j'); }
