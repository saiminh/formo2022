import { mobileNav } from './nav-mobile';
import { hideNav } from './nav-hide';
import { subNav } from './nav-subnav';
import { languageSwitcher } from './nav-language';
import { teamMemberSorting } from './teammember-sorting';
import { videoPlayPauseOnScroll } from './videoPlayPauseOnScroll';
import { videoPlayPauseOnHover } from './videoPlayPauseOnHover';
import { accordion } from './accordion';

mobileNav();
hideNav();
subNav();
languageSwitcher();
teamMemberSorting();
videoPlayPauseOnScroll();
videoPlayPauseOnHover();
accordion();

// Fake vh for mobile
var vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);