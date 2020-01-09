"use strict";

var hasClass = function(el, cn) {
  var pattern = new RegExp("\\b" + cn + "\\b");
  return pattern.test(el.className, cn);
};

function addClass(el, cn) {
  if (!hasClass(el, cn)) {
    el.className = (el.className === '') ? cn : el.className + ' ' + cn;
  }
}

function replaceClass(el, cn1, cn2) {
  var pattern = new RegExp("\\b" + cn1 + "\\b");
  el.className = el.className.replace(pattern, cn2);
}

var ContactForm = {
  
  init : function() {

    var i = document.createElement('input');
    var j = document.getElementById('no-placeholder');
  
    if ( 'placeholder' in i  && j === null ) {
      var el = document.documentElement;
      addClass(el, 'placeholder');
    }

    i.setAttribute("type", "date");
    if (i.type == "text") {
      var theDate = new Date();
      var day = '' + theDate.getDate();
      if ( day.length == 1 ) day = '0' + day;
      var month = theDate.getMonth() + 1;
      var year = theDate.getFullYear();
      theDate = day + '/' + month + '/' + year;
  
      var d = document.getElementsByName("date")[0];
      if ( d && 'value' in d ) {
        d.value = theDate;
      }
    }
  }
};

init.done = false;

function init() {
  if ( init.done ) return;

  init.done = true;

  if ( 'querySelector' in document && 'addEventListener' in window ) {
    // HTML5 Browsers
    
  }
  else {
    // HTML4 Browsers
    
  }
  
  // All Browsers
  ContactForm.init();
}


// Main
var isOperaMini = Object.prototype.toString.call(window.operamini) === '[object OperaMini]';

// Proxy Browsers should return false
//var cloudBrowser = ('onscroll' in window?false:true);

if ( !isOperaMini ) {
  if ( document.addEventListener ) {
    document.addEventListener( "DOMContentLoaded", init, false );
    window.addEventListener( "load", init, false );
  }
  else {
    window.onload = init;
  }
}