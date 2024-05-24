export function mobileNav(){
  const navbar = document.querySelector('.formo-navi');
  const links = Array.from(document.querySelectorAll('.formo-navi a:not(.mobile-nav-toggle .wp-block-button__link)'));
  const toggler = document.querySelector('.mobile-nav-toggle .wp-block-button__link');

  toggler.addEventListener('click', () => {
    navbar.classList.toggle('is-open');
    document.body.classList.toggle('nav-open');
  })
  
  links.forEach(link => {
    link.addEventListener('click', () => {
      const linkURL = link.querySelector('a')?.href;
      if (linkURL === window.location?.href || linkURL === '' || !linkURL) return;
      navbar.classList.contains('is-open') ? navbar.classList.remove('is-open') : null;
      document.body.classList.contains('nav-open') ? document.body.classList.remove('nav-open') : null;
    });
  })
}