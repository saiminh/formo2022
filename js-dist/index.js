"use strict";(self.webpackChunkformo2022=self.webpackChunkformo2022||[]).push([[57],{340:()=>{!function(){const e=Array.from(document.querySelectorAll(".formo-share > li"));if(e.length<1)return;const t=window.location.href,n=document.title,i=e.find((e=>e.classList.contains("wp-social-link-pinterest"))),s=i?.querySelector("a");s?.setAttribute("href",`//pinterest.com/pin/create/link/?url=${t}`);const o=e.find((e=>e.classList.contains("wp-social-link-mail"))),a=o?.querySelector("a");a?.setAttribute("href",`mailto:?subject=${n}&body=${n}: ${t}`);const r=e.find((e=>e.classList.contains("wp-social-link-chain"))),l=r?.querySelector("a");l?.addEventListener("click",(e=>{e.preventDefault(),navigator.clipboard.writeText(t),r.classList.add("copied"),setTimeout((()=>r.classList.remove("copied")),2e3)}))}(),function(){const e=document.querySelector(".formo-navi"),t=Array.from(document.querySelectorAll(".formo-navi a:not(.mobile-nav-toggle .wp-block-button__link)"));document.querySelector(".mobile-nav-toggle .wp-block-button__link").addEventListener("click",(()=>{e.classList.toggle("is-open"),document.body.classList.toggle("nav-open")})),t.forEach((t=>{t.addEventListener("click",(()=>{const n=t.querySelector("a")?.href;n!==window.location?.href&&""!==n&&n&&(e.classList.contains("is-open")&&e.classList.remove("is-open"),document.body.classList.contains("nav-open")&&document.body.classList.remove("nav-open"))}))}))}(),function(){let e=window.pageYOffset,t=document.body;window.onscroll=function(){if(!document.body.classList.contains("nav-open")){let n=window.pageYOffset;if(n<65)return void(t.classList.contains("nav-hidden")&&t.classList.remove("nav-hidden"));e>n?t.classList.contains("nav-hidden")&&t.classList.remove("nav-hidden"):t.classList.contains("nav-hidden")||t.classList.add("nav-hidden"),e=n}}}(),document.querySelectorAll("li.wp-block-navigation-submenu > a").forEach((e=>{e.addEventListener("touchend",(e=>{e.preventDefault(),e.target.parentElement.classList.toggle("open")}))})),function(){const e=document.querySelector(".formo-navi"),t=Array.from(e.classList).filter((e=>e.includes("has-formo-")));t&&t.forEach((t=>{e.classList.remove(t)}));const n=document.querySelector(".entry-content > :first-child");if(!n)return;const i=Array.from(n?.classList).filter((e=>e.includes("has-formo-")));e.classList.add(i[0]),e.classList.add(i[1])}(),function(){const e=document.querySelector(".wp-block-polylang-language-switcher");e&&(e.addEventListener("mouseenter",(()=>{e.classList.toggle("expanded")})),e.addEventListener("mouseleave",(()=>{e.classList.toggle("expanded")})),e.addEventListener("touchend",(t=>{const n=t.target;n.classList.contains("current-lang")||n.parentElement.classList.contains("current-lang")?t.preventDefault():(document.querySelector(".current-lang").classList.remove("current-lang"),n.closest("li").classList.add("current-lang")),e.classList.toggle("expanded")})))}(),function(){if(!document.querySelector(".formo2022-teammember-sorting"))return;const e=Array.from(document.querySelectorAll(".formo2022_teammember")),t=Array.from(document.querySelectorAll(".formo2022-teammember-sorting-questions a")),n=document.querySelector(".formo2022-teammember-sorting-nav > div:first-child a");function i(e,t){return Math.floor(Math.random()*(t-e+1)+e)}function s(t){e.forEach((e=>{e.querySelector("video[controls]")&&e.querySelector("video[controls]").attributes.removeNamedItem("controls");let n=e.offsetWidth/2,s=document.querySelector(".formo2022-teammember-sorting-teammembers").getBoundingClientRect().height,o=i(n,window.innerWidth/2-n),a=i(s/-2,s/2-n),r=i(60,100)/100;e.classList.contains("traits-"+t)?(e.style.transform="translate(0px, 0px) scale(1)",setTimeout((()=>{e.style.transform="translate("+o+"px, "+a+"px) scale("+r+")"}),800)):e.classList.contains("traits-"+t+"-not")?(e.style.transform="translate(0px, 0px) scale(1)",setTimeout((()=>{e.style.transform="translate(-"+o+"px, "+a+"px) scale("+r+")"}),800)):(e.style.transform="translate(0px, 0px) scale(1)",setTimeout((()=>{e.style.transform="translate(0px, 0px) scale(0)"}),800))}))}document.querySelector(".formo2022-teammember-sorting-nav > div:last-child a").addEventListener("click",(function(e){e.preventDefault(),function(){let e,n=document.querySelector(".formo2022-teammember-sorting-questions a.active");e=n.closest("p").nextElementSibling?n.closest("p").nextElementSibling.querySelector("a"):t[0],n.classList.remove("active"),e.classList.add("active"),s(e.getAttribute("href").replace("#",""))}()})),n.addEventListener("click",(function(e){e.preventDefault(),function(){let e,n=document.querySelector(".formo2022-teammember-sorting-questions a.active");e=n.closest("p").previousElementSibling?n.closest("p").previousElementSibling.querySelector("a"):t[t.length-1],n.classList.remove("active"),e.classList.add("active"),s(e.getAttribute("href").replace("#",""))}()})),t.forEach((e=>{const t=e.getAttribute("href").replace("#","");e.addEventListener("click",(function(n){n.preventDefault(),e.classList.add("active"),s(t)}))})),t[0].classList.add("active"),s(t[0].getAttribute("href").replace("#",""))}(),function(){const e=document.querySelectorAll(":not(.video-play-on-hover) > video[autoplay]");if(0==e.length)return;const t=new IntersectionObserver((e=>{e.forEach((e=>{e.isIntersecting?e.target.play():e.target.pause()}))}),{});e.forEach((e=>{t.observe(e),document.addEventListener("visibilitychange",(()=>{document.hidden?e.pause():e.play()}))}))}(),function(){const e=document.querySelectorAll(".video-play-on-hover video");if(0!=e.length)if(window.matchMedia("(hover: hover)").matches)e.forEach((e=>{e.addEventListener("mouseover",(()=>{e.play()})),e.addEventListener("mouseout",(()=>{e.pause()})),e.pause()}));else{const t=new IntersectionObserver((e=>{e.forEach((e=>{e.isIntersecting?e.target.play():e.target.pause()}))}),{});e.forEach((e=>{t.observe(e),document.addEventListener("visibilitychange",(()=>{document.hidden?e.pause():e.play()}))}))}}(),function(){class e{constructor(e){this.el=e,this.summary=e.querySelector("summary"),this.content=e.querySelector(".content"),this.animation=null,this.isClosing=!1,this.isExpanding=!1,this.summary.addEventListener("click",(e=>this.onClick(e)))}onClick(e){e.preventDefault(),this.el.style.overflow="hidden",this.isClosing||!this.el.open?this.open():(this.isExpanding||this.el.open)&&this.shrink()}shrink(){this.isClosing=!0;const e=`${this.el.offsetHeight}px`,t=`${this.summary.offsetHeight}px`;this.animation&&this.animation.cancel(),this.animation=this.el.animate({height:[e,t]},{duration:300,easing:"cubic-bezier(0.080, 1.635, 0.430, 0.840)"}),this.animation.onfinish=()=>this.onAnimationFinish(!1),this.animation.oncancel=()=>this.isClosing=!1}open(){this.el.style.height=`${this.el.offsetHeight}px`,this.el.open=!0,window.requestAnimationFrame((()=>this.expand()))}expand(){this.isExpanding=!0;const e=`${this.el.offsetHeight}px`,t=`${this.summary.offsetHeight+this.content.offsetHeight}px`;this.animation&&this.animation.cancel(),this.animation=this.el.animate({height:[e,t]},{duration:500,easing:"cubic-bezier(0.080, 1.635, 0.430, 0.840)"}),this.animation.onfinish=()=>this.onAnimationFinish(!0),this.animation.oncancel=()=>this.isExpanding=!1}onAnimationFinish(e){this.el.open=e,this.animation=null,this.isClosing=!1,this.isExpanding=!1,this.el.style.height=this.el.style.overflow=""}}document.querySelectorAll("details").forEach((t=>{new e(t)}))}(),document.addEventListener("DOMContentLoaded",(()=>{setTimeout((()=>{!function(){const e=document.querySelectorAll('abbr[data-title="alternative"]');if(!e)return;let t=new IntersectionObserver((function(e,t){e.forEach((e=>{e.isIntersecting&&!e.target.getAttribute("hasIntersectedOnce")&&(e.target.classList.add("alternative-pill--showing"),setTimeout((()=>{e.target.classList.remove("alternative-pill--showing"),e.target.classList.add("alternative-pill--hiding")}),2e3),setTimeout((()=>{e.target.classList.remove("alternative-pill--hiding")}),2500),e.target.setAttribute("hasIntersectedOnce","true"))}))}),{rootMargin:"-50px 100%",threshold:1});e.forEach((e=>{const n=document.createElement("span");n.classList.add("alternative-pill");const i=document.createElement("span");i.classList.add("alternative-pill-inner"),i.textContent="*alternative",n.appendChild(i),e.appendChild(n);const s=e.closest(".has-background");let o;o=s?window.getComputedStyle(s):window.getComputedStyle(document.body);const a=o.backgroundColor,r=window.getComputedStyle(e).color;if(n.style.backgroundColor=r,n.style.color=r,a===r){const e=a.match(/\d+/g),t=`rgb(${255-e[0]}, ${255-e[1]}, ${255-e[2]})`;i.style.color=t}else i.style.color=a;const l=e.getBoundingClientRect(),c=n.getBoundingClientRect();window.innerWidth-l.right<c.width+20&&e.classList.add("alternative-pill--right"),e.addEventListener("mouseover",(()=>{e.classList.contains("alternative-pill--hiding")&&e.classList.remove("alternative-pill--hiding"),e.classList.contains("alternative-pill--showing")||e.classList.add("alternative-pill--showing")})),e.addEventListener("mouseout",(()=>{e.classList.remove("alternative-pill--showing"),e.classList.add("alternative-pill--hiding"),setTimeout((()=>{e.classList.remove("alternative-pill--hiding")}),500)})),t.observe(e)}))}()}),1e3)}));var e=.01*window.innerHeight;document.documentElement.style.setProperty("--vh",`${e}px`)}},e=>{e(e.s=340)}]);