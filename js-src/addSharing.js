export function addSharing(){

  const shareButtons = Array.from(document.querySelectorAll('.formo-share > li'));
  if (shareButtons.length < 1) return;

  
  const currentPageURL = window.location.href;
  const pageTitle = document.title;
  
  const pinterestButton = shareButtons.find(button => button.classList.contains('wp-social-link-pinterest'));
  const pinterestLink = pinterestButton?.querySelector('a');
  pinterestLink?.setAttribute('href', `//pinterest.com/pin/create/link/?url=${currentPageURL}`);

  const mainShareButton = shareButtons.find(button => button.classList.contains('wp-social-link-mail'));
  const mainShareLink = mainShareButton?.querySelector('a');
  mainShareLink?.setAttribute('href', `mailto:?subject=${pageTitle}&body=${pageTitle}: ${currentPageURL}`);

  const copyLinkButton = shareButtons.find(button => button.classList.contains('wp-social-link-chain'));
  const copyLinkLink = copyLinkButton?.querySelector('a');
  copyLinkLink?.addEventListener('click', (e) => {
    e.preventDefault();
    navigator.clipboard.writeText(currentPageURL);
    copyLinkButton.classList.add('copied');
    setTimeout(() => copyLinkButton.classList.remove('copied'), 2000);
  });
}