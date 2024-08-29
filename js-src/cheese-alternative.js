export function cheeseAlternative(){
  const cheeseOccurences = document.querySelectorAll('abbr[data-title="alternative"]');

  if (!cheeseOccurences) {
    return;
  }

  let options = {
    rootMargin: "-50px 100%",
    threshold: 1.0,
  };

  let cheeseObserver = new IntersectionObserver(cheeseShowHide, options);

  function cheeseShowHide(entries, cheeseObserver) {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.getAttribute('hasIntersectedOnce')) {
        entry.target.classList.add('alternative-pill--showing');
        setTimeout(() => {
          entry.target.classList.remove('alternative-pill--showing');
          entry.target.classList.add('alternative-pill--hiding');
        }, 2000);
        setTimeout(() => {
          entry.target.classList.remove('alternative-pill--hiding');
        }, 2500);
        entry.target.setAttribute('hasIntersectedOnce', 'true');
      } 
    });
  }

  cheeseOccurences.forEach(cheese => {

    const cheeseRect = cheese.getBoundingClientRect();
    // check how far the cheese is from the right side of the viewport
    const distanceFromRight = window.innerWidth - cheeseRect.right;
    let isOnRightBorder = false;
    if ( distanceFromRight < 200 ) {
      cheese.classList.add('alternative-pill--right');
    }
    
    

    const alternativePill = document.createElement('span');
    alternativePill.classList.add('alternative-pill');
    
    const alternativePillInner = document.createElement('span');
    alternativePillInner.classList.add('alternative-pill-inner');
    alternativePillInner.textContent = '*alternative';
    
    alternativePill.appendChild(alternativePillInner);
    cheese.appendChild(alternativePill);

    //get the closest parent of cheese that has a class of 'has-background'
    const parent = cheese.closest('.has-background');
    //get the computed background-color of the parent
    let computedParentStyle;
    if (parent) {
      computedParentStyle = window.getComputedStyle(parent);
    }
    else {
      computedParentStyle = window.getComputedStyle(document.body);
    }
    const parentBgColor = computedParentStyle.backgroundColor;

    //get the computed text color of cheese
    const computedStyle = window.getComputedStyle(cheese);
    const textColor = computedStyle.color;

    //give cheese textColor as a background-color and parentBgColor as a color
    alternativePill.style.backgroundColor = textColor;
    alternativePill.style.color = textColor;

    if (parentBgColor === textColor) {
      // create the inverted color of parentBgColor in rgb(r,g,b) format
      const rgb = parentBgColor.match(/\d+/g);
      const invertedColor = `rgb(${255 - rgb[0]}, ${255 - rgb[1]}, ${255 - rgb[2]})`;
      alternativePillInner.style.color = invertedColor;
    } 
    else {
      alternativePillInner.style.color = parentBgColor;
    }
    
    // add event listeners to show and hide the alternative pill
    cheese.addEventListener('mouseover', () => {

      if ( cheese.classList.contains('alternative-pill--hiding') ) {
        cheese.classList.remove('alternative-pill--hiding');
      }
      if (!cheese.classList.contains('alternative-pill--showing')) {
        cheese.classList.add('alternative-pill--showing');
      } 
    });
    cheese.addEventListener('mouseout', () => {
      cheese.classList.remove('alternative-pill--showing');
      cheese.classList.add('alternative-pill--hiding');
      setTimeout(() => {
        cheese.classList.remove('alternative-pill--hiding');
      }, 500);
    });      

    cheeseObserver.observe(cheese);
  });
}