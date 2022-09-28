function edicao(a){
    let campo = document.querySelector('#identificao').value = a
    let form = document.querySelector('.edicao').style.display='flex'
    let erase = document.querySelector('.apagar').style.display='none'
    
}

function apagar(a){
    let opcao = document.querySelector('.sim a').href="apagar.php?id="+a
    let erase = document.querySelector('.apagar').style.display='flex'
    let form = document.querySelector('.edicao').style.display='none'
}

function alerta(){
    let dinheiro = document.querySelector('.dinheiro').textContent
    alert(dinheiro)
}
alerta()
alerta()