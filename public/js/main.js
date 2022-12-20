// bases
let imgBaseArea = document.getElementById('img-base-area');
let nomeBaseArea = document.getElementById('nome-base-area');
let descricaoBaseArea = document.getElementById('descricao-base-area');

let imgBase = localStorage.getItem('imgBase');
let descricaoBase = localStorage.getItem('descriptionBase');


// tampos
let imgTampoArea = document.getElementById('img-tampo-area');
let tampoTamanho = document.getElementById('tampo-tamanho');
let nomeTampoArea = document.getElementById('nome-tampo-area');
let descricaoTampoArea = document.getElementById('descricao-tampo-area');

let nameTampo = localStorage.getItem('nameTampo');
let descricaoTampo = localStorage.getItem('descriptionTampo');
let imgTampo = localStorage.getItem('imgTampo');
let alturaTampo = localStorage.getItem('altura');
let larguraTampo = localStorage.getItem('largura');
let comprimentoTampo = localStorage.getItem('comprimento');

// cadeiras
let imgCadeiraArea = document.getElementById('img-cadeira-area');
let nomeCadeiraArea = document.getElementById('nome-cadeira-area');
let descricaoCadeiraArea = document.getElementById('descricao-cadeira-area');

let imgCadeira = localStorage.getItem('imgCadeira');
let nomeCadeira = localStorage.getItem('nameCadeira');
let descricaoCadeira = localStorage.getItem('descriptionCadeira');

// imprimir



// botoes
let btnProximo = document.getElementById('btn-proximo');
let btnTamanhos = document.querySelectorAll('.btn-tamanhos');

// Função que limpa o storage e recomeça
function limpar() {
    localStorage.clear();
    window.location.href = '/';
}

if(imgBase){
    imgBaseArea.setAttribute('src', imgBase);
}
if (imgTampo) {
    imgTampoArea.setAttribute('src', imgTampo);
}
if (nameTampo){
    nomeTampoArea.innerHTML = nameTampo;
}
if (larguraTampo && comprimentoTampo){
    tampoTamanho.innerHTML = `${larguraTampo} X ${comprimentoTampo}`;
}

