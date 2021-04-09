
window.addEventListener("scroll", ()=>{

   let nav =  document.querySelector(".head1")

    if(window.pageYOffset <= 500){
        nav.classList.remove("nav-animation")
    }else{
        nav.classList.add("nav-animation")

    }

    let nav2 =  document.querySelector(".header2")

    if(window.pageYOffset <= 500){
        nav2.classList.remove("nav-animation2")
    }else{
        nav2.classList.add("nav-animation2")

    }

})
