export function currentNav(){
  
  let oldCurrentLink = document.querySelector('.current-menu-item a');
  oldCurrentLink ? oldCurrentLink.parentElement.classList.remove('current-menu-item') : null;
  let currentURL = document.location.href;
  let navLinks = Array.from( document.querySelectorAll('.formo-navi a') );
  let blogLink = document.querySelector('a[href$="/blog/"]');

  if ( currentURL.includes('/category/') ) {
    blogLink.parentElement.classList.add('current-menu-item');
  }

  navLinks.forEach(link => {
    if (link.href === currentURL) {
      link.parentElement.classList.add('current-menu-item');
    }
  })

  const navbar = document.querySelector('.formo-navi');
  const navBgClassList = Array.from(navbar.classList);
  const navBgClass = navBgClassList.filter( (className) => {
    return className.includes('has-formo-');
  });
  if ( navBgClass ) {
    navBgClass.forEach( (className) => {
      navbar.classList.remove(className) 
    })
  } 
  else { null };

  const firstContainer = document.querySelector('.entry-content > :first-child');
  const allClasses = Array.from(firstContainer.classList);
  const newBgClass = allClasses.filter( (className) => {
    return className.includes('has-formo-');
  })

  navbar.classList.add(newBgClass[0]);
  navbar.classList.add(newBgClass[1]);
}