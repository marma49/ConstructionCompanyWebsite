var nav = document.querySelector('nav');

window.addEventListener('scroll',function(){
    if(this.window.pageYOffset>100){
        nav.classList.add('bg-dark','shadow');
    }
    else{
        nav.classList.remove('bg-dark','shadow')
    }
});

let toggles=document.getElementsByClassName('toggle-faq');
let contentDiv=document.getElementsByClassName('content-faq');
let icons=document.getElementsByClassName('icon-faq');
for(let i=0;i<toggles.length;i++){
    toggles[i].addEventListener('click',()=>{
        if(parseInt(contentDiv[i].style.height)
        !=contentDiv[i].scrollHeight){
            contentDiv[i].style.height=contentDiv[i].scrollHeight+"px";
            icons[i].classList.remove('fa-plus');
            icons[i].classList.add('fa-minus');
        }
        else{
            contentDiv[i].style.height="0px";
            icons[i].classList.remove('fa-minus');
            icons[i].classList.add('fa-plus');
        }
    });
}