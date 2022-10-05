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



let linha = document.querySelectorAll('#row')

for(let i of linha){
    if(Number(i.cells[2].textContent)>1000){
        i.classList.add('cor')
    }
}

let d = document.querySelectorAll('.dinheiro')
let a
for(let i of d){
    a = Number(i.textContent)
    a = a.toFixed(2)
    i.innerHTML=a
}





// const row = document.querySelectorAll("[draggable='true']")
// const localSoltar = document.querySelector("table")


// function comecarArrastar(){
//     this.classList.add("arrastando")
// }
// function entrouSoltar(){
//     this.classList.add("fundo")
//     const elementoArrastado = document.querySelector(".arrastando")
//     this.appendChild(elementoArrastado)
// }


// row.forEach((row)=>{
//     row.addEventListener("dragstart",comecarArrastar)
// })

// localSoltar.addEventListener("dragover",entrouSoltar)
