export function currentNav(){
  
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