(()=>{"use strict";var e="D:\\Ampps\\www\\freemius\\wp-content\\plugins\\html5-audio-player\\src\\settings\\settings.js";const{__:l}=wp.i18n,{Button:t,Placeholder:n,Spinner:m,ToggleControl:r,TabPanel:s,PanelBody:a,PanelRow:i}=wp.components,{render:o,Fragment:u,useState:c,useEffect:_}=wp.element;o(wp.element.createElement((function(){const[o,N]=c(!1),[b,f]=c(!1),[p,w]=c(!1);return _((()=>{wp.api.loadPromise.then((()=>{const e=new wp.api.models.Settings;!1===p&&e.fetch().then((e=>{N(Boolean(e.h5ap_gutenberg_enable)),w(!0)}))}))}),[]),p?wp.element.createElement(u,{__self:this,__source:{fileName:e,lineNumber:64,columnNumber:5}},wp.element.createElement(s,{className:"bPSS",activeClass:"active-tab",tabs:[{name:"howto",title:"How to use"}],__self:this,__source:{fileName:e,lineNumber:72,columnNumber:7}},(n=>wp.element.createElement("div",{className:"wrapper",__self:this,__source:{fileName:e,lineNumber:89,columnNumber:13}},"howto"==n.name&&wp.element.createElement(a,{initialOpen:!0,__self:this,__source:{fileName:e,lineNumber:91,columnNumber:17}},wp.element.createElement("div",{class:"howto",__self:this,__source:{fileName:e,lineNumber:92,columnNumber:19}},wp.element.createElement("div",{id:"icon-tools",class:"icon32",__self:this,__source:{fileName:e,lineNumber:93,columnNumber:21}}),wp.element.createElement("h3",{__self:this,__source:{fileName:e,lineNumber:94,columnNumber:21}},l("We made a movie for you! Watch it and learn.","h5ap")," "),wp.element.createElement("div",{class:"embed-container",__self:this,__source:{fileName:e,lineNumber:95,columnNumber:21}},wp.element.createElement("iframe",{src:"https://www.youtube.com/embed/MbY9oyERJck",frameborder:"0",allowfullscreen:!0,__self:this,__source:{fileName:e,lineNumber:96,columnNumber:23}})))),"options"==n.name&&wp.element.createElement(u,{__self:this,__source:{fileName:e,lineNumber:102,columnNumber:17}},wp.element.createElement(a,{__self:this,__source:{fileName:e,lineNumber:103,columnNumber:19}},wp.element.createElement(i,{__self:this,__source:{fileName:e,lineNumber:104,columnNumber:21}},wp.element.createElement(r,{label:l("Enable Gutenberg Shortcode Generator"),help:"if you want to use Gutenberg as Shortcode generator, please enable the option.",checked:o,onChange:()=>N(!o),__self:this,__source:{fileName:e,lineNumber:105,columnNumber:23}}))),wp.element.createElement(a,{className:"option_save",__self:this,__source:{fileName:e,lineNumber:113,columnNumber:19}},wp.element.createElement(t,{disabled:b,isPrimary:!0,onClick:()=>{return e="h5ap_gutenberg_enable",l=o,f(!0),void new wp.api.models.Settings({[e]:l}).save().then((l=>{f(!1),N(l[e])}));var e,l},__self:this,__source:{fileName:e,lineNumber:114,columnNumber:21}},"Save"))))))):wp.element.createElement(u,{__self:this,__source:{fileName:e,lineNumber:49,columnNumber:7}},wp.element.createElement(n,{__self:this,__source:{fileName:e,lineNumber:57,columnNumber:9}},wp.element.createElement(m,{__self:this,__source:{fileName:e,lineNumber:58,columnNumber:11}})))}),{__self:void 0,__source:{fileName:e,lineNumber:128,columnNumber:8}}),document.getElementById("h5ap-settings"))})();