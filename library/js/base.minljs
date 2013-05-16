/*
 * RWD Retrofit v1.7
 * Allows an existing "desktop site" to co-exist with a "responsive site", while also able to serve the desktop site to a different breakpoint on "mobile" - useful for serving the desktop site to tablets, for example
 *
 * Returns an object containing the desktop (rwdRetrofit.desktop) and optional mobile (rwdRetrofit.mobile) media queries as strings for responding to media queries with JS; for example, by using enquire.js (http://wickynilliams.github.com/enquire.js)
 *
 * Copyright (c) 2013 Izilla Partners Pty Ltd
 *
 * http://www.izilla.com.au
 *
 * Licensed under the MIT license
 */
;var rwdRetrofit=(function(){if(!document.querySelector||!document.getElementsByClassName||typeof(document.documentElement.clientWidth)=="undefined"){return}var l=document.querySelector('meta[name="viewport"]'),u=document.getElementsByClassName("rwdretrofit-desktop"),b=document.getElementsByClassName("rwdretrofit-mobile");if(!l||u.length===0||b.length===0){return}var g="ontouchstart" in window,o="content",f="media",e=l&&l.getAttribute(o),h="width=980",a=250,c="onorientationchange" in window,n=c?"orientationchange":"resize",s=u[0].getAttribute(f),w=b[0].getAttribute(f),m=u[0].getAttribute("data-breakpoint-width"),t,p=u[0].getAttribute("data-viewport-width"),d=u[0].getAttribute("data-debug"),v={};if(g||d==="true"){if(m){t=m}else{t=s.replace(/.*?min-width:\s?(\d*).*/g,"$1")}if(p&&parseInt(p)>=parseInt(t)){h=h.replace(/\d+/,p)}else{if(t>980){h=h.replace(/\d+/,t)}}}else{t=s.replace(/.*?min-width:\s?(\d*).*/g,"$1")}s=s.replace(/(min-width:\s?)\d*/g,"$1"+t);w=w.replace(/(max-width:\s?)\d*/g,"$1"+(t-1));v.desktop=s,v.mobile=w;if(g||d==="true"){for(var r=0;r<u.length;r++){u[r].setAttribute(f,s)}for(var q=0;q<b.length;q++){b[q].setAttribute(f,w)}}if(g){function k(){l.setAttribute(o,e);window.setTimeout(function(){if(document.documentElement.clientWidth>=t){l.setAttribute(o,h)}},a)}k();window.addEventListener(n,k,false)}return v})();
/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
window.matchMedia=window.matchMedia||(function(e,f){var c,a=e.documentElement,b=a.firstElementChild||a.firstChild,d=e.createElement("body"),g=e.createElement("div");g.id="mq-test-1";g.style.cssText="position:absolute;top:-100em";d.style.background="none";d.appendChild(g);return function(h){g.innerHTML='&shy;<style media="'+h+'"> #mq-test-1 { width: 42px; }</style>';a.insertBefore(d,b);c=g.offsetWidth===42;a.removeChild(d);return{matches:c,media:h}}}(document));
/*! matchMedia() polyfill addListener/removeListener extension. Author & copyright (c) 2012: Scott Jehl. Dual MIT/BSD license */
(function(){if(!window.matchMedia("").addListener){var a=window.matchMedia;window.matchMedia=function(f){var c=a(f),d=[],e=false,g,b=function(){var k=a(f);if(k.matches&&!e){for(var j=0,h=d.length;j<h;j++){d[j].call(c,k)}}e=k.matches};c.addListener=function(h){d.push(h);if(!g){g=setInterval(b,1000)}};c.removeListener=function(h){for(var k=0,j=d.length;k<j;k++){if(d[k]===h){d.splice(k,1)}}if(!d.length&&g){clearInterval(g)}};return c}}}());