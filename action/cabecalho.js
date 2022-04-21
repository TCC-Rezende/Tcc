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
    let menuTG = document.querySelector(".menu .toggle button")
    let valida = menuTG.classList.value
   
   
    if (valida === "ativo"){
        menuTG.classList.remove("ativo")
    }else{
        menuTG.classList.add("ativo")
    }

}