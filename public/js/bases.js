let imgBase = localStorage.getItem('imgBase');
let tituloBase = localStorage.getItem('tituloBase');
let descBase = localStorage.getItem('descBase');
let idBase = localStorage.getItem('idBase');

document.getElementById('img-base-principal').setAttribute('src', imgBase);
document.getElementById('bases-para-cadeiras').setAttribute('href', `/page_cadeira/`);
document.getElementById('titulo-base').innerHTML = tituloBase;
document.getElementById('desc-base').innerHTML = descBase;

function trocabase(img, descricao, idBase){
    localStorage.setItem('imgBase', img.src);
    localStorage.setItem('tituloBase', img.alt);
    localStorage.setItem('descBase', descricao);
    localStorage.setItem('idBase', idBase);
    document.location.reload(true);

}
