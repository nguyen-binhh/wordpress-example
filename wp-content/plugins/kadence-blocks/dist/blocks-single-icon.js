(()=>{var e={4184:(e,t)=>{var n;!function(){"use strict";var i={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var a=typeof n;if("string"===a||"number"===a)e.push(n);else if(Array.isArray(n)){if(n.length){var r=o.apply(null,n);r&&e.push(r)}}else if("object"===a)if(n.toString===Object.prototype.toString)for(var l in n)i.call(n,l)&&n[l]&&e.push(l);else e.push(n.toString())}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(n=function(){return o}.apply(t,[]))||(e.exports=n)}()},9196:e=>{"use strict";e.exports=window.React},9543:e=>{"use strict";e.exports=window.kadence.components},6222:e=>{"use strict";e.exports=window.kadence.helpers},9995:e=>{"use strict";e.exports=window.kadence.icons},2175:e=>{"use strict";e.exports=window.wp.blockEditor},4981:e=>{"use strict";e.exports=window.wp.blocks},5609:e=>{"use strict";e.exports=window.wp.components},9818:e=>{"use strict";e.exports=window.wp.data},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n}},t={};function n(i){var o=t[i];if(void 0!==o)return o.exports;var a=t[i]={exports:{}};return e[i](a,a.exports,n),a.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var i in t)n.o(t,i)&&!n.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:t[i]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),n.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var i={};(()=>{"use strict";n.r(i);const e=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"title":"Single Icon","name":"kadence/single-icon","parent":["kadence/icon"],"category":"kadence-blocks","attributes":{"uniqueID":{"type":"string","default":""},"icon":{"type":"string","default":"fe_aperture"},"link":{"type":"string","default":""},"target":{"type":"string","default":"_self"},"size":{"type":"number","default":50},"width":{"type":"number","default":2},"title":{"type":"string","default":""},"color":{"type":"string","default":""},"background":{"type":"string","default":"transparent"},"border":{"type":"string","default":""},"borderRadius":{"type":"number","default":0},"borderWidth":{"type":"number","default":2},"padding":{"type":"array","default":["xs","xs","xs","xs"]},"paddingUnit":{"type":"string","default":"px"},"style":{"type":"string","default":"default"},"margin":{"type":"array","default":["","","",""]},"marginUnit":{"type":"string","default":"px"},"hColor":{"type":"string","default":""},"hBackground":{"type":"string","default":""},"hBorder":{"type":"string","default":""},"linkTitle":{"type":"string","default":""},"tabletSize":{"type":"number","default":""},"mobileSize":{"type":"number","default":""},"tabletMargin":{"type":"array","default":["","","",""]},"mobileMargin":{"type":"array","default":["","","",""]},"tabletPadding":{"type":"array","default":["","","",""]},"mobilePadding":{"type":"array","default":["","","",""]},"inQueryBlock":{"type":"boolean","default":false}},"supports":{"ktdynamic":true,"html":false,"reusable":false,"kbMetadata":true},"usesContext":["postId","queryId"]}');var t=n(9995),o=n(9196),a=n(9543),r=n(6222),l=n(9818);function d({attributes:e,previewDevice:t}){const{inQueryBlock:n,icon:i,link:l,target:d,size:c,width:s,title:u,text:g,hColor:p,hBackground:b,tabletSize:v,hBorder:k,color:m,background:f,border:h,borderRadius:y,padding:w,borderWidth:C,style:_,linkTitle:x,level:S,blockAlignment:I,textAlignment:P,tabletTextAlignment:E,mobileTextAlignment:B,tabletPadding:O,mobilePadding:T,paddingUnit:z,tabletMargin:D,mobileMargin:R,margin:U,marginUnit:A,mobileSize:M,uniqueID:q,verticalAlignment:N}=e,K=(0,r.getPreviewSize)(t,c||void 0,void 0!==v&&v?v:void 0,void 0!==M&&M?M:void 0),$=(0,r.getPreviewSize)(t,U&&void 0!==U[0]?U[0]:void 0,D&&void 0!==D[0]?D[0]:void 0,R&&void 0!==R[0]?R[0]:void 0),W=(0,r.getPreviewSize)(t,U&&void 0!==U[1]?U[1]:void 0,D&&void 0!==D[1]?D[1]:void 0,R&&void 0!==R[1]?R[1]:void 0),j=(0,r.getPreviewSize)(t,U&&void 0!==U[2]?U[2]:void 0,D&&void 0!==D[2]?D[2]:void 0,R&&void 0!==R[2]?R[2]:void 0),L=(0,r.getPreviewSize)(t,U&&void 0!==U[3]?U[3]:void 0,D&&void 0!==D[3]?D[3]:void 0,R&&void 0!==R[3]?R[3]:void 0),V=(0,r.getPreviewSize)(t,w&&void 0!==w[0]?w[0]:void 0,O&&void 0!==O[0]?O[0]:void 0,T&&void 0!==T[0]?T[0]:void 0),F=(0,r.getPreviewSize)(t,w&&void 0!==w[1]?w[1]:void 0,O&&void 0!==O[1]?O[1]:void 0,T&&void 0!==T[1]?T[1]:void 0),Q=(0,r.getPreviewSize)(t,w&&void 0!==w[2]?w[2]:void 0,O&&void 0!==O[2]?O[2]:void 0,T&&void 0!==T[2]?T[2]:void 0),H=(0,r.getPreviewSize)(t,w&&void 0!==w[3]?w[3]:void 0,O&&void 0!==O[3]?O[3]:void 0,T&&void 0!==T[3]?T[3]:void 0),J=void 0!==z&&z?z:"px",G=void 0!==A&&A?A:"px";return(0,o.createElement)("div",{className:`kt-svg-style-${_} kt-svg-icon-wrap kt-svg-item-${q}`},i&&(0,o.createElement)(o.Fragment,null,(0,o.createElement)(a.IconRender,{className:`kt-svg-icon kt-svg-icon-${i}`,name:i,size:K,strokeWidth:"fe"===i.substring(0,2)?s:void 0,title:u||"",style:{color:m?(0,r.KadenceColorOutput)(m):void 0,backgroundColor:f&&"default"!==_?(0,r.KadenceColorOutput)(f):void 0,paddingTop:V&&"default"!==_?(0,r.getSpacingOptionOutput)(V,J):void 0,paddingRight:F&&"default"!==_?(0,r.getSpacingOptionOutput)(F,J):void 0,paddingBottom:Q&&"default"!==_?(0,r.getSpacingOptionOutput)(Q,J):void 0,paddingLeft:H&&"default"!==_?(0,r.getSpacingOptionOutput)(H,J):void 0,borderColor:h&&"default"!==_?(0,r.KadenceColorOutput)(h):void 0,borderWidth:C&&"default"!==_?C+"px":void 0,borderRadius:y&&"default"!==_?y+"%":void 0,marginTop:$?(0,r.getSpacingOptionOutput)($,G):void 0,marginRight:W?(0,r.getSpacingOptionOutput)(W,G):void 0,marginBottom:j?(0,r.getSpacingOptionOutput)(j,G):void 0,marginLeft:L?(0,r.getSpacingOptionOutput)(L,G):void 0}})))}var c=n(5736);function s({attributes:e,setAttributes:t}){const{margin:n,tabletMargin:i,mobileMargin:r,marginUnit:l,padding:d,tabletPadding:s,mobilePadding:u,paddingUnit:g,style:p}=e;return(0,o.createElement)(a.KadencePanelBody,{title:(0,c.__)("Icon","kadence-blocks")+" "+(0,c.__)("Spacing Settings","kadence-blocks"),initialOpen:!0,panelName:"iconSpacing",blockSlug:"kadence/icon"},"default"!==p&&(0,o.createElement)(a.ResponsiveMeasureRangeControl,{label:(0,c.__)("Icon Padding","kadence-blocks"),value:d||["","","",""],onChange:e=>t({padding:e}),tabletValue:s||["","","",""],onChangeTablet:e=>t({tabletPadding:e}),mobileValue:u||["","","",""],onChangeMobile:e=>t({mobilePadding:e}),min:0,max:"em"===(g||"px")||"rem"===(g||"px")?25:400,step:"em"===(g||"px")||"rem"===(g||"px")?.1:1,unit:g||"px",units:["px","em","rem"],onUnit:e=>t({paddingUnit:e})}),(0,o.createElement)(a.ResponsiveMeasureRangeControl,{label:(0,c.__)("Icon Margin","kadence-blocks"),value:n||["","","",""],onChange:e=>t({margin:e}),tabletValue:i||["","","",""],onChangeTablet:e=>t({tabletMargin:e}),mobileValue:r||["","","",""],onChangeMobile:e=>t({mobileMargin:e}),min:"em"===(l||"px")||"rem"===(l||"px")?-25:-400,max:"em"===(l||"px")||"rem"===(l||"px")?25:400,step:"em"===(l||"px")||"rem"===(l||"px")?.1:1,unit:l||"px",units:["px","em","rem"],onUnit:e=>t({marginUnit:e}),allowAuto:!0}))}var u=n(2175),g=n(9307),p=n(5609);var b=n(4184),v=n.n(b);const k=[{attributes:e.attributes,supports:e.supports,apiVersion:2,save:({attributes:e})=>{const{icon:t,link:n,target:i,width:r,title:l,style:d,linkTitle:c,uniqueID:s}=e;return(0,o.createElement)("div",{className:`kt-svg-style-${d} kt-svg-icon-wrap kt-svg-item-${s}`},t&&n&&(0,o.createElement)("a",{href:n,className:"kt-svg-icon-link",target:"_blank"===i?i:void 0,rel:"_blank"===i?"noopener noreferrer":void 0,"aria-label":void 0!==c&&""!==c?c:void 0},(0,o.createElement)(a.IconSpanTag,{name:t,strokeWidth:"fe"===t.substring(0,2)?r:void 0,title:l||""})),t&&!n&&(0,o.createElement)(a.IconSpanTag,{name:t,strokeWidth:"fe"===t.substring(0,2)?r:void 0,title:l||""}))}}];(0,n(4981).registerBlockType)("kadence/single-icon",{...e,title:(0,c.__)("Single Icon","kadence-blocks"),description:(0,c.__)("Single icon within Icon block","kadence-blocks"),keywords:[(0,c.__)("icon","kadence-blocks"),(0,c.__)("svg","kadence-blocks"),"KB"],icon:{src:t.iconIcon},getEditWrapperProps({blockAlignment:e}){if("left"===e||"right"===e||"center"===e)return{"data-align":e}},edit:function(t){const{attributes:n,className:i,setAttributes:b,clientId:v,isSelected:k,name:m,context:f}=t,{inQueryBlock:h,icon:y,link:w,target:C,size:_,width:x,title:S,text:I,hColor:P,hBackground:E,tabletSize:B,hBorder:O,color:T,background:z,border:D,borderRadius:R,padding:U,borderWidth:A,style:M,linkTitle:q,level:N,tabletPadding:K,mobilePadding:$,paddingUnit:W,tabletMargin:j,mobileMargin:L,margin:V,marginUnit:F,mobileSize:Q,uniqueID:H}=n,J=["icon","link","target"],[G,X]=(0,g.useState)("general"),{addUniqueID:Y}=(0,l.useDispatch)("kadenceblocks/data"),{isUniqueID:Z,isUniqueBlock:ee,previewDevice:te,parentData:ne}=(0,l.useSelect)((e=>({isUniqueID:t=>e("kadenceblocks/data").isUniqueID(t),isUniqueBlock:(t,n)=>e("kadenceblocks/data").isUniqueBlock(t,n),previewDevice:e("kadenceblocks/data").getPreviewDeviceType(),parentData:{rootBlock:e("core/block-editor").getBlock(e("core/block-editor").getBlockHierarchyRootClientId(v)),postId:e("core/editor")?.getCurrentPostId()?e("core/editor")?.getCurrentPostId():"",reusableParent:e("core/block-editor").getBlockAttributes(e("core/block-editor").getBlockParentsByBlockName(v,"core/block").slice(-1)[0]),editedPostId:!!e("core/edit-site")&&e("core/edit-site").getEditedPostId()}})),[v]);(0,g.useEffect)((()=>{(0,r.setBlockDefaults)("kadence/single-icon",n);const e=(0,r.getPostOrFseId)(t,ne);let i=(0,r.getUniqueId)(H,v,Z,ee,e);i!==H?(n.uniqueID=i,b({uniqueID:i}),Y(i,v)):Y(H,v),b({inQueryBlock:(0,r.getInQueryBlock)(f,h)})}),[]);const ie=(0,u.useBlockProps)({className:i}),oe=(0,o.createElement)("style",null,`.wp-block-kadence-single-icon .kt-svg-item-${H}:hover .kt-svg-icon {\n\t\t\t\t\t${void 0!==P&&P?"color:"+(0,r.KadenceColorOutput)(P)+"!important;":""}\n            }\n            .wp-block-kadence-single-icon .kt-svg-style-stacked.kt-svg-item-${H}:hover .kt-svg-icon {\n\t\t\t\t\t${void 0!==E&&E?"background:"+(0,r.KadenceColorOutput)(E)+"!important;":""}\n\t\t\t\t\t${void 0!==O&&O?"border-color:"+(0,r.KadenceColorOutput)(O)+"!important;":""}\n            }`);return(0,o.createElement)("div",{...ie},oe,(0,o.createElement)(u.BlockControls,null,(0,o.createElement)(a.CopyPasteAttributes,{attributes:n,excludedAttrs:J,defaultAttributes:e.attributes,blockSlug:e.name,onPaste:e=>b(e)})),(0,o.createElement)(a.KadenceInspectorControls,{blockSlug:"kadence/icon"},(0,o.createElement)(a.InspectorControlTabs,{panelName:"single-icon",allowedTabs:["general","advanced"],setActiveTab:e=>X(e),activeTab:G}),"general"===G&&(0,o.createElement)(o.Fragment,null,(0,o.createElement)(a.KadencePanelBody,{title:(0,c.__)("Icon Settings","kadence-blocks"),initialOpen:!0,panelName:"kb-icon-settings"},(0,o.createElement)(a.KadenceIconPicker,{value:y,onChange:e=>{b({icon:e})}}),(0,o.createElement)(a.ResponsiveRangeControls,{label:(0,c.__)("Icon Size","kadence-blocks"),value:_||"",onChange:e=>{b({size:e})},tabletValue:void 0!==B?B:"",onChangeTablet:e=>{b({tabletSize:e})},mobileValue:void 0!==Q?Q:"",onChangeMobile:e=>{b({mobileSize:e})},min:0,max:300,step:1,unit:"px"}),y&&"fe"===y.substring(0,2)&&(0,o.createElement)(a.RangeControl,{label:(0,c.__)("Line Width"),value:x,onChange:e=>{b({width:e})},step:.5,min:.5,max:4}),(0,o.createElement)(a.KadenceRadioButtons,{label:(0,c.__)("Icon Style","kadence-blocks"),value:M,options:[{value:"default",label:(0,c.__)("Default","kadence-blocks")},{value:"stacked",label:(0,c.__)("Stacked","kadence-blocks")}],onChange:e=>b({style:e})}),(0,o.createElement)(a.PopColorControl,{label:(0,c.__)("Icon Color","kadence-blocks"),value:T||"",default:"",onChange:e=>{b({color:e})},swatchLabel2:(0,c.__)("Hover Color","kadence-blocks"),value2:P||"",default2:"",onChange2:e=>{b({hColor:e})}}),"default"!==M&&(0,o.createElement)(o.Fragment,null,(0,o.createElement)(a.PopColorControl,{label:(0,c.__)("Background Color","kadence-blocks"),value:z||"",default:"",onChange:e=>{b({background:e})},swatchLabel2:(0,c.__)("Hover Background","kadence-blocks"),value2:E||"",default2:"",onChange2:e=>{b({hBackground:e})}}),(0,o.createElement)(a.PopColorControl,{label:(0,c.__)("Border Color","kadence-blocks"),value:D||"",default:"",onChange:e=>{b({border:e})},swatchLabel2:(0,c.__)("Hover Border","kadence-blocks"),value2:O||"",default2:"",onChange2:e=>{b({hBorder:e})}}),(0,o.createElement)(a.RangeControl,{label:(0,c.__)("Border Size (px)","kadence-blocks"),value:A,onChange:e=>{b({borderWidth:e})},min:0,max:20}),(0,o.createElement)(a.RangeControl,{label:(0,c.__)("Border Radius (%)","kadence-blocks"),value:R,onChange:e=>{b({borderRadius:e})},min:0,max:50})),(0,o.createElement)(a.URLInputControl,{label:(0,c.__)("Link","kadence-blocks"),url:w,onChangeUrl:e=>{b({link:e})},additionalControls:!0,opensInNewTab:!(!C||"_blank"!=C),onChangeTarget:e=>{b(e?{target:"_blank"}:{target:"_self"})},linkTitle:q,onChangeTitle:e=>{b({linkTitle:e})},dynamicAttribute:"link",allowClear:!0,isSelected:k,attributes:n,setAttributes:b,name:m,clientId:v,context:f}),(0,o.createElement)(p.TextControl,{label:(0,c.__)("Title for screen readers","kadence-blocks"),help:(0,c.__)("If no title added screen readers will ignore, good if the icon is purely decorative.","kadence-blocks"),value:S,onChange:e=>{b({title:e})}}))),"advanced"===G&&(0,o.createElement)(o.Fragment,null,(0,o.createElement)(s,{attributes:n,setAttributes:b}),(0,o.createElement)(a.KadenceBlockDefaults,{attributes:n,defaultAttributes:e.attributes,blockSlug:e.name,excludedAttrs:J}))),(0,o.createElement)(d,{attributes:n,previewDevice:te}))},save:function({attributes:e,className:t}){const{icon:n,link:i,target:r,width:l,title:d,style:c,linkTitle:s,uniqueID:g}=e,p=v()({[`kt-svg-style-${c}`]:c,"kt-svg-icon-wrap":!0,[`kt-svg-item-${g}`]:g}),b=u.useBlockProps.save({className:p});return(0,o.createElement)("div",{...b},n&&i&&(0,o.createElement)("a",{href:i,className:"kt-svg-icon-link",target:"_blank"===r?r:void 0,rel:"_blank"===r?"noopener noreferrer":void 0,"aria-label":void 0!==s&&""!==s?s:void 0},(0,o.createElement)(a.IconSpanTag,{name:n,strokeWidth:"fe"===n.substring(0,2)?l:void 0,title:d||""})),n&&!i&&(0,o.createElement)(a.IconSpanTag,{name:n,strokeWidth:"fe"===n.substring(0,2)?l:void 0,title:d||""}))},deprecated:k,example:{}})})(),(this.kadence=this.kadence||{})["blocks-single-icon"]=i})();