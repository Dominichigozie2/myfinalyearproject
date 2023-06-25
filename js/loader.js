
window.addEventListener("load",()=>{
   setTimeout(()=>{
      const loader = document.querySelector(".loader"); 

   loader.classList.add("loader-hidden");

   loader.addEventListener("transitionend",()=>{
    document.body.classList.remove("loader");
   });
   },500);
});

const bar = document.querySelector(".bars");
bar.addEventListener('click',()=>{
   const aside = document.querySelector("aside");
   aside.classList.toggle("display");
   if(aside.contains = "display"){
      bar.style.display="none";
   }else{
      bar.style.display="flex";
   }
});

const close = document.querySelector(".close");
close.addEventListener('click',()=>{
   const bar = document.querySelector(".bars");
   const aside = document.querySelector("aside");
   aside.classList.remove("display");
   bar.style.display = "flex";
});

window.addEventListener('scroll',()=>{
   const aside = document.querySelector("aside");
   aside.classList.remove("display");
   bar.style.display="flex";
});









// page fade in animation

const fadeContainer = document.querySelectorAll(".fade-out");
// console.log(fadeContainer);

const observer = new IntersectionObserver(entries =>{
    entries.forEach(entry =>{
       entry.target.classList.toggle("fade-in", entry.isIntersecting)
    })
},{
   threshold: 0.5,
}
)


fadeContainer.forEach(fade =>{
   observer.observe(fade)
})


const fadeContainer2 = document.querySelectorAll(".fade-from-right");
// console.log(fadeContainer);

const observer2 = new IntersectionObserver(entries =>{
    entries.forEach(entry =>{
       entry.target.classList.toggle("fade-in-from-right", entry.isIntersecting)
    })
},{
   threshold: 0,
}
)

fadeContainer2.forEach(fade =>{
   observer2.observe(fade)
})
const fadeContainer3 = document.querySelectorAll(".fade-from-left");
// console.log(fadeContainer);

const observer3 = new IntersectionObserver(entries =>{
    entries.forEach(entry =>{
       entry.target.classList.toggle("fade-in-from-left", entry.isIntersecting)
    })
},{
   threshold: 0,
}
)

fadeContainer3.forEach(fade =>{
   observer3.observe(fade)
})


const hubby = document.querySelector('#hubby');
hubby.addEventListener('click', ()=>{
  const body = document.querySelector("#hubby-container");
  const arow = document.querySelector("#arrow");

  body.classList.toggle("bod");
  arow.classList.toggle("fa-angle-up");
});

