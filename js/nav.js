const sbtn = document.querySelector('.sub-btn');
sbtn.addEventListener('click',()=>{
    const smenu = document.querySelector('.smenu');
    smenu.classList.toggle('sdisplay');
});


const navLinkEls = document.querySelectorAll("#nav-link");
const windowPathname = window.location.pathname;

// console.log(windowPathname);

navLinkEls.forEach(navLinkEl=>{
  if(navLinkEl.href.includes(windowPathname)){
    navLinkEl.classList.add("inactive");
  }
});
