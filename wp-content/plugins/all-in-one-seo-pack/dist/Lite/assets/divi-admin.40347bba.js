import{n as s,V as i}from"./js/vueComponentNormalizer.58b0a173.js";import{C as a}from"./js/index.d42c878d.js";import{S as l}from"./js/Standalone.101c8802.js";import{s as c}from"./js/index.f5a89b52.js";import"./js/client.d00863cc.js";import"./js/_commonjsHelpers.10c44588.js";import"./js/translations.3bc9d58c.js";import"./js/default-i18n.0e73c33c.js";import"./js/constants.9efee5f7.js";import"./js/isArrayLikeObject.5268a676.js";import"./js/portal-vue.esm.272b3133.js";var u=function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"aioseo-divi-seo-admin-notice-container"},[o("core-alert",{domProps:{innerHTML:t._s(t.strings.alert)}})],1)},p=[];const m=window.aioseo.urls.aio.searchAppearance,d={components:{CoreAlert:a},mixins:[l],data(){return{strings:{alert:this.$t.sprintf(this.$t.__("The options below are disabled because you are using %1$s to manage your SEO. They can be changed in the %2$sSearch Appearance menu%3$s.",this.$td),"All in One SEO",`<a href="${m}" target="_blank">`,"</a>")}}}},r={};var _=s(d,u,p,!1,f,null,null,null);function f(t){for(let e in r)this[e]=r[e]}const h=function(){return _.exports}(),y=()=>{const t=document.querySelectorAll("#wrap-seo .et-tab-content");for(let e=0;e<t.length;e++){const o=document.createElement("div");o.setAttribute("id",`aioseo-divi-seo-admin-notice-container-${e}`),t[e].insertBefore(o,t[e].firstChild),new i({store:c,render:n=>n(h)}).$mount(`#${o.getAttribute("id")}`)}},A=()=>{const t=document.querySelectorAll('#wrap-seo input[type="text"], #wrap-seo textarea');for(let n=0;n<t.length;n++)t[n].style.pointerEvents="none",t[n].setAttribute("readonly",!0);const e=document.querySelectorAll("#wrap-seo select");for(let n=0;n<e.length;n++)e[n].style.pointerEvents="none",e[n].setAttribute("disabled",!0);const o=document.querySelectorAll("#wrap-seo .et-checkbox");for(let n=0;n<o.length;n++)o[n].setAttribute("disabled",!0),o[n].nextElementSibling.style.pointerEvents="none"},b=()=>{const t=window.aioseo.urls.aio.searchAppearance,e=document.querySelector('a[href="#wrap-seo"]');if(!t||!e)return;const o=e.cloneNode(!0);o.setAttribute("href",t),e.parentNode.replaceChild(o,e)};window.addEventListener("load",()=>{y(),A(),b()});
