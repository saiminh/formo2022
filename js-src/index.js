import { mobileNav } from './nav-mobile';
import { hideNav } from './nav-hide';
import { subNav } from './nav-subnav';
import { languageSwitcher } from './nav-language';
import { teamMemberSorting } from './teammember-sorting';
import { videoPlayPauseOnScroll } from './videoPlayPauseOnScroll';
import { videoPlayPauseOnHover } from './videoPlayPauseOnHover';
import { accordion } from './accordion';
import { currentNav } from './nav-current';
import { addSharing } from './addSharing';
import { cheeseAlternative } from './cheese-alternative';

addSharing();
mobileNav();
hideNav();
subNav();
currentNav();
languageSwitcher();
teamMemberSorting();
videoPlayPauseOnScroll();
videoPlayPauseOnHover();
accordion();
document.addEventListener('DOMContentLoaded', () => {
  // Put this one on a timeout and behind domloaded so that the other JS generated elements are already there eg the newsticker
  setTimeout(() => {
    cheeseAlternative();
  }, 1000)
})

// Fake vh for mobile
var vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);