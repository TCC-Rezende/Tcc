function pesqAtiva(){

    let pesquisa = document.querySelector(".menu li form .pesq")
    let valida = pesquisa.value.length

    if (valida == 0){
        pesquisa.classList.remove('clicou')
    }else{
        pesquisa.classList.add('clicou')
    }
}


// Menu config


function  menuToggle(){
    let menuTG = document.querySelector(".menu.responivo .toggle button")
    let container = document.querySelector(".menu.nav-container")
    let body = document.querySelector("body")
    let valida = menuTG.classList.value
   
    
    if (valida === "ativo"){
        menuTG.classList.remove("ativo")
        container.classList.remove("ativo")
        body.classList.remove("ativo")
    }else{
        menuTG.classList.add("ativo")
        container.classList.add("ativo")
        body.classList.add("ativo")
    }
}


window.addEventListener("scroll", function(){

    let cabecalho = document.querySelector("header")
    let tela = this.scrollY
    console.log(tela)

    if(this.scrollY > 0){
        cabecalho.style.position = "fixed"
        cabecalho.classList.add("fixa", window.scrollY > 0)
    }else{
        cabecalho.style.position = "relative"
        cabecalho.classList.remove("fixa")
    }
})