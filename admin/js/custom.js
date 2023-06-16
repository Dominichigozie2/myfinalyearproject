let toggle = document.querySelector(".toggler");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let trl = document.querySelectorAll(".tittle");

toggle.onclick = function(){
    navigation.classList.toggle("active");
    main.classList.toggle("active");
}



const sbtn = document.querySelector('.sub-btn');
sbtn.addEventListener('click',()=>{
    const smenu = document.querySelector('.sub-menu');
    const sicon = document.querySelector('.change');
    smenu.classList.toggle('dis');
    sicon.classList.toggle('fa-angle-up');
});


const sbtna = document.querySelector('.sub-btn2');
sbtna.addEventListener('click',()=>{
    const smenua = document.querySelector('.sub-menu2');
    const sicona = document.querySelector('.change2');
    smenua.classList.toggle('dis2');
    sicona.classList.toggle('fa-angle-up');
});


const abtn = document.querySelector('.user');
abtn.addEventListener('click',()=>{
    const amenu = document.querySelector('.sub-account');
    console.log(amenu);
    amenu.classList.toggle('ashow');
});



const navLinkEls = document.querySelectorAll('.nav-link');
const windowPathname = window.location.pathname;

navLinkEls.forEach(navLinkEl =>{
    if(navLinkEl.href.includes(windowPathname)){
        navLinkEl.classList.add("kok");
    }
})

const cardEl = document.querySelectorAll("#card");
console.log(cardEl);
function activeLink(){
    cardEl.forEach(item=>{
        item.classList.remove("active");
        console.log(cardEl);
        
    })
    cardEl.classList.add("active");
}
cardEl.forEach(items => items.addEventListener("mouseover", activeLink));
