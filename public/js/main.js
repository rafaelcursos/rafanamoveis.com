// bases
let imgBaseArea = document.getElementById('img-base-area');
let nomeBaseArea = document.getElementById('nome-base-area');
let imgBase = localStorage.getItem('imgBase');

// tampos
let imgTampoArea = document.getElementById('img-tampo-area');
let tampoTamanho = document.getElementById('tampoTamanho');
let nomeTampoArea = document.getElementById('nome-tampo-area');

let nameTampo = localStorage.getItem('nameTampo');
let imgTampo = localStorage.getItem('imgTampo');
let alturaTampo = localStorage.getItem('altura');
let larguraTampo = localStorage.getItem('largura');
let comprimentoTampo = localStorage.getItem('comprimento');

// cadeiras
// imprimir

// botoes
let btnProximo = document.getElementById('btn-proximo');
let btnTamanhos = document.querySelectorAll('.btn-tamanhos');

// Função que limpa o storage e recomeça
function limpar() {
    localStorage.clear();
    window.location.href = '/';
}

