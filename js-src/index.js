// import Swup from 'swup';
// import SwupHeadPlugin from '@swup/head-plugin';
// import SwupScrollPlugin from '@swup/scroll-plugin';
import { load } from './swup/load';
// import { unload } from './swup/unload';
import { mobileNav } from './nav-mobile';
import { hideNav } from './nav-hide';
import { navClick } from './nav-click';

//Initialize swup for page transitions
// const options = { plugins: [ 
//   new SwupHeadPlugin(), 
//   new SwupScrollPlugin({
//     doScrollingRightAway: true,
//     animateScroll: {
//       betweenPages: false,
//       samePageWithHash: true,
//       samePage: true
//     }
//   })] };
// const swup = new Swup(options);

mobileNav();
hideNav();
navClick();
// run once
load();
// runs for every page view after initial load
// swup.on('contentReplaced', load);

// run once
// unload();
// runs before page content is replaced
// swup.on('willReplaceContent', unload);

// Fake vh for mobile
var vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);