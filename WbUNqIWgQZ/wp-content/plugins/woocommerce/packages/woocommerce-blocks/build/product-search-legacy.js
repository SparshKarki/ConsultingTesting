this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["product-search"]=function(e){function t(t){for(var n,i,l=t[0],a=t[1],s=t[2],b=0,g=[];b<l.length;b++)i=l[b],Object.prototype.hasOwnProperty.call(r,i)&&r[i]&&g.push(r[i][0]),r[i]=0;for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n]);for(u&&u(t);g.length;)g.shift()();return o.push.apply(o,s||[]),c()}function c(){for(var e,t=0;t<o.length;t++){for(var c=o[t],n=!0,l=1;l<c.length;l++){var a=c[l];0!==r[a]&&(n=!1)}n&&(o.splice(t--,1),e=i(i.s=c[0]))}return e}var n={},r={11:0},o=[];function i(t){if(n[t])return n[t].exports;var c=n[t]={i:t,l:!1,exports:{}};return e[t].call(c.exports,c,c.exports,i),c.l=!0,c.exports}i.m=e,i.c=n,i.d=function(e,t,c){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:c})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var c=Object.create(null);if(i.r(c),Object.defineProperty(c,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)i.d(c,n,function(t){return e[t]}.bind(null,n));return c},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var l=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],a=l.push.bind(l);l.push=t,l=l.slice();for(var s=0;s<l.length;s++)t(l[s]);var u=a;return o.push([617,0]),c()}({0:function(e,t){!function(){e.exports=this.wp.element}()},1:function(e,t){!function(){e.exports=this.wp.i18n}()},10:function(e,t){!function(){e.exports=this.React}()},15:function(e,t){!function(){e.exports=this.wp.blocks}()},215:function(e,t){},216:function(e,t){},22:function(e,t){!function(){e.exports=this.wp.compose}()},23:function(e,t){!function(){e.exports=this.wp.blockEditor}()},3:function(e,t){!function(){e.exports=this.wc.wcSettings}()},4:function(e,t){!function(){e.exports=this.wp.components}()},5:function(e,t){!function(){e.exports=this.lodash}()},6:function(e,t,c){"use strict";c.d(t,"m",(function(){return r})),c.d(t,"n",(function(){return o})),c.d(t,"h",(function(){return i})),c.d(t,"j",(function(){return l})),c.d(t,"a",(function(){return a})),c.d(t,"i",(function(){return s})),c.d(t,"l",(function(){return u})),c.d(t,"c",(function(){return b})),c.d(t,"k",(function(){return g})),c.d(t,"b",(function(){return p})),c.d(t,"f",(function(){return d})),c.d(t,"g",(function(){return h})),c.d(t,"d",(function(){return f})),c.d(t,"e",(function(){return m})),c.d(t,"o",(function(){return O}));var n=c(3),r=(Object(n.getSetting)("currentUserIsAdmin",!1),Object(n.getSetting)("reviewRatingsEnabled",!0)),o=Object(n.getSetting)("showAvatars",!0),i=Object(n.getSetting)("max_columns",6),l=Object(n.getSetting)("min_columns",1),a=Object(n.getSetting)("default_columns",3),s=Object(n.getSetting)("max_rows",6),u=Object(n.getSetting)("min_rows",1),b=Object(n.getSetting)("default_rows",3),g=Object(n.getSetting)("min_height",500),p=Object(n.getSetting)("default_height",500),d=(Object(n.getSetting)("placeholderImgSrc",""),Object(n.getSetting)("thumbnail_size",300),Object(n.getSetting)("isLargeCatalog")),h=Object(n.getSetting)("limitTags"),f=(Object(n.getSetting)("hasProducts",!0),Object(n.getSetting)("hasTags",!0)),m=Object(n.getSetting)("homeUrl",""),O=(Object(n.getSetting)("couponsEnabled",!0),Object(n.getSetting)("shippingEnabled",!0),Object(n.getSetting)("taxesEnabled",!0),Object(n.getSetting)("displayItemizedTaxes",!1),Object(n.getSetting)("displayShopPricesIncludingTax",!1),Object(n.getSetting)("displayCartPricesIncludingTax",!1),Object(n.getSetting)("productCount",0),Object(n.getSetting)("attributes",[]),Object(n.getSetting)("isShippingCalculatorEnabled",!0),Object(n.getSetting)("isShippingCostHidden",!1),Object(n.getSetting)("woocommerceBlocksPhase",1),Object(n.getSetting)("wcBlocksAssetUrl","")),j=(Object(n.getSetting)("wcBlocksBuildUrl",""),Object(n.getSetting)("shippingCountries",{}),Object(n.getSetting)("allowedCountries",{}),Object(n.getSetting)("shippingStates",{}),Object(n.getSetting)("allowedStates",{}),Object(n.getSetting)("shippingMethodsExist",!1),Object(n.getSetting)("checkoutShowLoginReminder",!0),{id:0,title:"",permalink:""}),w=Object(n.getSetting)("storePages",{shop:j,cart:j,checkout:j,privacy:j,terms:j});w.shop.permalink,w.checkout.id,w.checkout.permalink,w.privacy.permalink,w.privacy.title,w.terms.permalink,w.terms.title,w.cart.id,w.cart.permalink,Object(n.getSetting)("checkoutAllowsGuest",!1),Object(n.getSetting)("checkoutAllowsSignup",!1),c(15)},60:function(e,t,c){"use strict";var n=c(8),r=c.n(n),o=c(35),i=c.n(o),l=c(10);c(2);function a(e,t){var c=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),c.push.apply(c,n)}return c}t.a=function(e){var t=e.srcElement,c=e.size,n=void 0===c?24:c,o=i()(e,["srcElement","size"]);return Object(l.isValidElement)(t)&&Object(l.cloneElement)(t,function(e){for(var t=1;t<arguments.length;t++){var c=null!=arguments[t]?arguments[t]:{};t%2?a(Object(c),!0).forEach((function(t){r()(e,t,c[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(c)):a(Object(c)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(c,t))}))}return e}({width:n,height:n},o))}},617:function(e,t,c){e.exports=c(632)},632:function(e,t,c){"use strict";c.r(t);var n=c(0),r=c(1),o=c(15),i=c(60),l=c(645),a=Object(n.createElement)(l.a,{xmlns:"http://www.w3.org/2000/SVG",viewBox:"0 0 24 24"},Object(n.createElement)("path",{fill:"none",d:"M0 0h24v24H0V0z"}),Object(n.createElement)("path",{d:"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"})),s=(c(215),c(216),c(7)),u=c.n(s),b=(c(2),c(6)),g=function(e){var t=e.attributes,c=t.label,o=t.placeholder,i=t.formId,l=t.className,a=t.hasLabel,s=t.align,g=u()("wc-block-product-search",s?"align"+s:"",l);return Object(n.createElement)("div",{className:g},Object(n.createElement)("form",{role:"search",method:"get",action:b.e},Object(n.createElement)("label",{htmlFor:i,className:a?"wc-block-product-search__label":"wc-block-product-search__label screen-reader-text"},c),Object(n.createElement)("div",{className:"wc-block-product-search__fields"},Object(n.createElement)("input",{type:"search",id:i,className:"wc-block-product-search__field",placeholder:o,name:"s"}),Object(n.createElement)("input",{type:"hidden",name:"post_type",value:"product"}),Object(n.createElement)("button",{type:"submit",className:"wc-block-product-search__button",label:Object(r.__)("Search",'woocommerce')},Object(n.createElement)("svg",{"aria-hidden":"true",role:"img",focusable:"false",className:"dashicon dashicons-arrow-right-alt2",xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20"},Object(n.createElement)("path",{d:"M6 15l5-5-5-5 1-2 7 7-7 7z"}))))))},p=c(23),d=c(4),h=c(22),f=Object(h.withInstanceId)((function(e){var t=e.attributes,c=t.label,o=t.placeholder,i=t.formId,l=t.className,a=t.hasLabel,s=t.align,b=e.instanceId,g=e.setAttributes,h=u()("wc-block-product-search",s?"align"+s:"",l);return i||g({formId:"wc-block-product-search-".concat(b)}),Object(n.createElement)(n.Fragment,null,Object(n.createElement)(p.InspectorControls,{key:"inspector"},Object(n.createElement)(d.PanelBody,{title:Object(r.__)("Content",'woocommerce'),initialOpen:!0},Object(n.createElement)(d.ToggleControl,{label:Object(r.__)("Show search field label",'woocommerce'),help:a?Object(r.__)("Label is visible.",'woocommerce'):Object(r.__)("Label is hidden.",'woocommerce'),checked:a,onChange:function(){return g({hasLabel:!a})}}))),Object(n.createElement)("div",{className:h},!!a&&Object(n.createElement)(p.PlainText,{className:"wc-block-product-search__label",value:c,onChange:function(e){return g({label:e})}}),Object(n.createElement)("div",{className:"wc-block-product-search__fields"},Object(n.createElement)(p.PlainText,{className:"wc-block-product-search__field input-control",value:o,onChange:function(e){return g({placeholder:e})}}),Object(n.createElement)("button",{type:"submit",className:"wc-block-product-search__button",label:Object(r.__)("Search",'woocommerce'),onClick:function(e){return e.preventDefault()},tabIndex:"-1"},Object(n.createElement)("svg",{"aria-hidden":"true",role:"img",focusable:"false",className:"dashicon dashicons-arrow-right-alt2",xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20"},Object(n.createElement)("path",{d:"M6 15l5-5-5-5 1-2 7 7-7 7z"}))))))}));Object(o.registerBlockType)("woocommerce/product-search",{title:Object(r.__)("Product Search",'woocommerce'),icon:{src:Object(n.createElement)(i.a,{srcElement:a}),foreground:"#96588a"},category:"woocommerce",keywords:[Object(r.__)("WooCommerce",'woocommerce')],description:Object(r.__)("A search box to allow customers to search for products by keyword.",'woocommerce'),supports:{align:["wide","full"]},example:{attributes:{hasLabel:!0}},attributes:{hasLabel:{type:"boolean",default:!0},label:{type:"string",default:Object(r.__)("Search",'woocommerce'),source:"text",selector:"label"},placeholder:{type:"string",default:Object(r.__)("Search products…",'woocommerce'),source:"attribute",selector:"input.wc-block-product-search__field",attribute:"placeholder"},formId:{type:"string",default:""}},edit:f,save:function(e){return Object(n.createElement)("div",null,Object(n.createElement)(g,e))}})}});
