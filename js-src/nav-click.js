export function navClick() {
  const links = document.querySelectorAll('.wp-block-navigation-item:not(.current-menu-item)');
  links.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const linkURL = link.querySelector('a').href;
      document.querySelector('.current-menu-item')?.classList.remove('current-menu-item');
      link.classList.add('current-menu-item');
      //navigate to linkURL
      setTimeout(function() {
        window.location.href = linkURL;
      }, 10);
    })
  })
}