(()=>{"use strict";var e;"undefined"!=typeof jQuery&&(e=jQuery)((function(){function t(e){var t=0;elementorCommon&&(t=jQuery(e.target).parents(".elementor-section-wrap").length>0?jQuery(this).parents(".elementor-add-section").index():-1)>=0&&jQuery(e.target).parents(".elementor-add-section-inline").remove();var n=document.getElementById("envato-elements-magic-button-holder");n||((n=document.createElement("div")).id="envato-elements-magic-button-holder",document.body.appendChild(n));var o={mode:"elementorMagicButton",insertCallback:function(e){if("undefined"!=typeof elementor)if("undefined"!=typeof $e){for(var o=$e.internal("document/history/start-log",{type:"add",title:"Add Envato Elements Content"}),a=0;a<e.content.length;a++)$e.run("document/elements/create",{container:elementor.getPreviewContainer(),model:e.content[a],options:t>=0?{at:t++}:{}});$e.internal("document/history/end-log",{id:o})}else{var r=new Backbone.Model({getTitle:()=>"Test"});elementor.channels.data.trigger("template:before:insert",r);for(var l=0;l<e.content.length;l++)elementor.getPreviewView().addChildElement(e.content[l],t>=0?{at:t++}:null);elementor.channels.data.trigger("template:after:insert",{})}window.envatoElements.closeMagicButton(n)}};window.envatoElements.initMagicButton(n,o)}var n=e("#tmpl-elementor-add-section");if(n.length>0){var o=n.text();o=o.replace('<div class="elementor-add-section-drag-title','<div class="elementor-add-section-area-button elementor-add-envato-button" title="Envato Elements"> <i class="fa fa-folder"></i> </div><div class="elementor-add-section-drag-title'),n.text(o),elementor.on("preview:loaded",(function(){e(elementor.$previewContents[0].body).on("click",".elementor-add-envato-button",t)}))}}))})();