export function languageSwitcher() {
  const switcher = document.querySelector('.wp-block-polylang-language-switcher');
  switcher.addEventListener('click', (e) => {
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