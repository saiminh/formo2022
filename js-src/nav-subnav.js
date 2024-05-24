export function subNav() {
  const allSubNavs = document.querySelectorAll('li.wp-block-navigation-submenu > a');
  allSubNavs.forEach(subNav => {
    //only touchend listener so this only happens on touch devices
    subNav.addEventListener('touchend', (e) => {
      e.preventDefault();
      e.target.parentElement.classList.toggle('open');
    })
  });
}