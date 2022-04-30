let body = document.querySelector("body")
let containerImgs = document.querySelector("#img");
let imagens = document.querySelectorAll("#img img");
// imagens[0] -> camisas
// imagens[1] -> neymar
// imagens[2] -> salah


function carrossel(){
    imagens[0].classList.add('visivel')

    if (imagens[0].classList.value == 'visivel'){
        imagens[0].style.right = 0 
        imagens[0].style.trasition = 0.5+"s" 

        imagens[0].classList.remove('visivel')
        imagens[1].classList.add('visivel')

    }else if(imagens[1].classList.value == 'visivel'){
        imagens[0].style.right = 100+'%' 
        
        imagens[1].style.right = 0 
        imagens[1].style.trasition = 0.5+"s" 

        imagens[1].classList.remove('visivel')

    }
    
}
