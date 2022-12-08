let base = document.getElementById('base');
let tampo = document.getElementById('tampo');
let cadeira = document.getElementById('cadeira');
let reportNameTampo = document.getElementById('nametampo');
let reportNameBase = document.getElementById('reportNameBase');
let reportDescriptionTampo = document.getElementById('reportDescriptionTampo');
let reportDescriptionBase = document.getElementById('reportDescriptionBase');

let btnProximo = document.getElementById('btn-proximo');

let imgBase = localStorage.getItem('imgBase');
let imgTampo = localStorage.getItem('imgTampo');
let imgCadeira = localStorage.getItem('imgCadeira');

let nameBase = localStorage.getItem('nameBase');
let nameTampo = localStorage.getItem('nameTampo');
let nameCadeira = localStorage.getItem('nameCadeira');

let descriptionBase = localStorage.getItem('descriptionBase');
let descriptionTampo = localStorage.getItem('descriptionTampo');
let descriptionCadeira = localStorage.getItem('descriptionCadeira');

function limpar(){
    localStorage.clear();
    window.location.href = '/';
}

function trocabase(img, name, description, id, vitrine){
    localStorage.setItem('imgBase', img);
    localStorage.setItem('nameBase', name);
    localStorage.setItem('descriptionBase', description);
    base.setAttribute('src', img);
    btnProximo.setAttribute('href', `/site/bases/cor/${vitrine}/${id}`);

}

function trocacor(img, nomeCor, vitrineId){
    localStorage.setItem('imgBase', img);
    localStorage.setItem('nomeCor', nomeCor);
    window.location.href = `/site/tampos/${vitrineId}`;
}

function setTamanho(altura, largura, comprimento){
    localStorage.setItem('altura', altura)
    localStorage.setItem('largura', largura)
    localStorage.setItem('comprimento', comprimento)
}

function trocatampo(img, name, description){
    localStorage.setItem('imgTampo', img);
    localStorage.setItem('nameTampo', name);
    localStorage.setItem('descriptionTampo', description);
    tampo.setAttribute('src', img);
}

function trocacadeira(img, name, description){
    localStorage.setItem('imgCadeira', img);
    localStorage.setItem('nameCadeira', name);
    localStorage.setItem('descriptionCadeira', description);
    cadeira.setAttribute('src', img);
}

if(imgBase){
    base.setAttribute('src', imgBase);
}
if(imgTampo){
    tampo.setAttribute('src', imgTampo);
}
if(imgCadeira){
    cadeira.setAttribute('src', imgCadeira);
}

reportNameTampo.innerHTML = nameTampo;
reportNameBase.innerHTML = nameBase;
reportNameCadeira.innerHTML = nameCadeira;

reportDescriptionTampo.innerHTML = descriptionTampo;
reportDescriptionBase.innerHTML = descriptionBase;
reportDescriptionCadeira.innerHTML = descriptionCadeira;

