(()=>{window.addEventListener("elementor/frontend/init",(function(){elementorFrontend.hooks.addAction("frontend/element_ready/SimpleAudioPlayer.default",(function(t,n){const r=t[0].querySelector(".h5ap_elementor");e.initialize(r)}))})),document.addEventListener("DOMContentLoaded",(function(){const t=document.querySelectorAll(".h5ap_standard_player:not(.h5ap_elementor)");e.initialize(t)}));class e{static initialize=t=>{const n=e.getDetectorData(t);if(!n)return!1;const{wrapper:r,mediaElement:o,options:a,infos:i}=n,l=new Plyr(o,{controls:["play","progress","duration","mute","volume","download"],...a});return l.on("ready",(function(){r.querySelector(".plyr__time--duration").innerHTML=e.toHHMMSS(l.duration)})),l};static getDetectorData=function(t){let n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(null===t)return!1;if(void 0!==t[0])return window.dd=e,t?.forEach((t=>e.initialize(t))),!1;if(void 0!==t.length&&0===t.length)return!1;null!==t.querySelector(".h5ap_standard_player")&&(t=t.querySelector(".h5ap_standard_player")),n=n||null==jQuery(t).attr("data-options")?{}:JSON.parse(jQuery(t).attr("data-options")),r=r||null==jQuery(t).attr("data-infos")?{}:JSON.parse(jQuery(t).attr("data-infos"));let o="";return o=t.querySelector("audio"),{wrapper:t,mediaElement:o,options:n,infos:r}};static toHHMMSS(e){var t=parseInt(e,10),n=Math.floor(t/3600),r=Math.floor((t-3600*n)/60),o=t-3600*n-60*r;return n<10&&(n="0"+n),r<10&&(r="0"+r),o<10&&(o="0"+o),r+":"+o}}})();