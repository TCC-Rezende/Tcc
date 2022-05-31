function btnToggle(){
    /* Pegar o container sidebar e usalo tambem, ha conflito com o botao ta */
    let container = document.querySelector(".nav-sidebar")
    let divGeral = document.querySelector(".nav-lateral")
    let logo = divGeral.querySelector(".logo-navBar")
    let navCentral = divGeral.querySelector(".navega")
    let btnVoltar = divGeral.querySelector(".back_Btn")

    container.classList.toggle("on")
    divGeral.classList.toggle("on")
    

    if(divGeral.classList.value == "nav-lateral on"){
        logo.classList.toggle("small")
        navCentral.classList.toggle("small")
        btnVoltar.classList.toggle("small")
        
    }else{
        logo.classList.toggle("small")
        navCentral.classList.toggle("small")
        btnVoltar.classList.toggle("small")
    }
}


let linksInter = document.querySelectorAll(".nav-sidebar .nav-lateral .navega .menu .elemento-nav .item-nav")
let a1 =  linksInter[0] 
 a1.addEventListener('click', () =>{
    console.log("clicou")
 })



// getAttribute("href") 