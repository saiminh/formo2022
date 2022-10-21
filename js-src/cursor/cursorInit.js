export function cursorInit(){

  let htmlString = '<div class=\"cursor-wrapper\"><div class=\"cursor-container\" ref=\"cursor\"><div class=\"cursor-content\"><div class=\"drag\" >DRAG</div><div class=\"icon icon__left\"></div><div class=\"icon\"></div></div></div></div>';
  
  document.body.insertAdjacentHTML('beforeend', htmlString);

  document.body.classList.add('cursor-ready');
  
}
