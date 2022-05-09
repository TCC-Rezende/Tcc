const logarBtn = document.querySelector('.logarBtn')
const cadastrBtn = document.querySelector('.cadastrBtn')
const formBx = document.querySelector('.formBx')
const body = document.querySelector('body')

cadastrBtn.onclick = function(){
    formBx.classList.add('ativo')
    body.classList.add('ativo')
}

logarBtn.onclick = function(){
    formBx.classList.remove('ativo')
    body.classList.remove('ativo')
}

