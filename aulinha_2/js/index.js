var somatoria = 0;
var index = 0;

function subtrairSomatoria(abacate) {
    somatoria = somatoria - abacate;
    alert(`A somatória é igual a: ${somatoria}`)
}

function zerarSomatoria() {
    somatoria = 0;
    alert(`A somatória é igual a: ${somatoria}`)
}

function alertaCaique(banana) {
    somatoria = banana + somatoria;
    alert(`A somatória é igual a: ${somatoria}`)
}   

function adicionaH1sDiv() {
    let i = index; // 0 // 6
    let divDeBaixo = document.getElementById('div-de-baixo');

    for (i; i<index+6; i++) { // 0 - 6 // 6 - 12
        let variavel = i+1;
        let elementoAdicionado = document.createElement('h1')
        elementoAdicionado.innerHTML = `Alo bahia - ${variavel} `;
        divDeBaixo.appendChild(elementoAdicionado);
        let quebraDelinha = document.createElement('br')
        divDeBaixo.appendChild(quebraDelinha);                
    }
    index += 6; // 0 + 6 = 6 // 6 + 6 = 12
}