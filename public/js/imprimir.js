let imgTampoImprimir = document.getElementById('img-tampo-imprimir');
let imgBaseImprimir = document.getElementById('img-base-imprimir');
let descricaoTampo = document.getElementById('descricao-tampo');
let nameBase = document.getElementById('name-base');
let descricaoBase = document.getElementById('descricao-base');


let tampoImg = localStorage.getItem('imgTampo');
let baseImg = localStorage.getItem('imgBase');
let dbNameTampo = localStorage.getItem('nameTampo');
let dbDescricaoTampo = localStorage.getItem('descriptionTampo');
let dbNameBase = localStorage.getItem('nameBase');
let dbDescricaoBase = localStorage.getItem('descriptionBase');

imgTampoImprimir.setAttribute('src', tampoImg);
imgBaseImprimir.setAttribute('src', baseImg);
cadeira.setAttribute('src', imgCadeira);
nameTampo.innerHTML = nameTampo;
nameBase.innerHTML = dbNameBase;
descricaoTampo.innerHTML = dbDescricaoTampo;
descricaoBase.innerHTML = dbDescricaoBase;
