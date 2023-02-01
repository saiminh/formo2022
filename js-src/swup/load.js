// import { cursorPageLinks } from '../cursor/cursorPageLinks';
import { currentNav } from '../nav-current';
import { teamMemberSorting } from '../teammember-sorting';
import { videoPlayPauseOnScroll } from '../videoPlayPauseOnScroll';
import { videoPlayPauseOnHover } from '../videoPlayPauseOnHover';
import { accordion } from '../accordion';

export function load(){
  window.scrollTo(0, 0);
  // cursorPageLinks();
  currentNav();
  teamMemberSorting();
  videoPlayPauseOnScroll();
  videoPlayPauseOnHover();
  accordion();
  // need to reload some custom block's scripts here for swup reloading
  if (typeof addJobExpandability === "function") { 
    addJobExpandability();
    addJobFiltering();
  }
  if (typeof initPopover === "function") { 
    initPopover();
  }
  if (typeof initGlassdoorReviews === "function") { 
    initGlassdoorReviews();
  }
}