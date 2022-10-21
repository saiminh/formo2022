export function hideNav(){

  let prevScrollpos = window.pageYOffset;
  let parentElement = document.body;
  window.onscroll = function() {
    if ( document.body.classList.contains( 'nav-open' ) ) {
      return; // if the mobile nav is opened, don't hide it
    } else {
      // check scroll position
      let currentScrollPos = window.pageYOffset;

      if ( currentScrollPos < 65) {
        // if the scroll position is less than 65, show and don't do anything
        if ( parentElement.classList.contains( 'nav-hidden' ) ) {
          parentElement.classList.remove( 'nav-hidden' );
        }
        return;
      }
      if (prevScrollpos > currentScrollPos) {
        // if scrolling up, show the nav
        if ( parentElement.classList.contains( 'nav-hidden' ) ) {
          parentElement.classList.remove( 'nav-hidden' );
        }
      } else {
        if ( !parentElement.classList.contains( 'nav-hidden' ) ) {
          parentElement.classList.add( 'nav-hidden' );
        }
      }
      prevScrollpos = currentScrollPos;
    }
  }
}