export function languageSwitcher() {
  const switcher = document.querySelector('.wp-block-polylang-language-switcher');


  console.log('switcher', switcher);
  switcher.addEventListener('mouseenter', () => {
    switcher.classList.toggle('expanded');
  })
  switcher.addEventListener('mouseleave', () => {
    switcher.classList.toggle('expanded');
  })

  switcher.addEventListener('touchend', (e) => {
    const target = e.target;
    if (target.classList.contains('current-lang') || target.parentElement.classList.contains('current-lang') ) {
      e.preventDefault();
    }
    else {
      document.querySelector('.current-lang').classList.remove('current-lang');
      target.closest('li').classList.add('current-lang');
    }
    switcher.classList.toggle('expanded');
  });
}