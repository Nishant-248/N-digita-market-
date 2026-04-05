function scrollToForm(){
document.getElementById("contact").scrollIntoView({
behavior:"smooth"
});
}

window.addEventListener("scroll",function(){

let cards = document.querySelectorAll(".card");

cards.forEach(card=>{
let position = card.getBoundingClientRect().top;
let screen = window.innerHeight;

if(position < screen){
card.style.opacity="1";
card.style.transform="translateY(0)";
}
});

});



function scrollToForm(){
document.getElementById("contact").scrollIntoView({
behavior:"smooth"
});
}




// typing animation

const text = "Hello, I'm Nishant";

let i = 0;

function typing(){

if(i < text.length){

document.querySelector(".typing").innerHTML += text.charAt(i);

i++;

setTimeout(typing,80);

}

}

typing();




gsap.from("header",{
y:-100,
opacity:0,
duration:1
})

gsap.from(".hero h2",{
y:50,
opacity:0,
delay:0.5
})

gsap.from(".profile",{
scale:0,
duration:1
})

gsap.from(".about p",{
opacity:0,
y:30,
stagger:0.3
})