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

const notification_btn = document.querySelector("#notibtn");

notification_btn.addEventListener("click", () =>{
  const notification = document.querySelector(".notification-cont");
  notification.classList.toggle("notify");
});

window.addEventListener("scroll", () =>{
  const notification = document.querySelector(".notification-cont");
  notification.classList.remove("notify");
});

// console.log(notification, notification_btn);
