let imgTampo = localStorage.getItem('imgTampo');
let tituloTampo = localStorage.getItem('tituloTampo');
let descTampo = localStorage.getItem('descTampo');
let idTampo = localStorage.getItem('idTampo');


document.getElementById('img-tampo-principal').setAttribute('src', imgTampo);
document.getElementById('titulo-tampo').innerHTML = tituloTampo;
document.getElementById('desc-tampo').innerHTML = descTampo;
document.getElementById('tampo-para-bases').setAttribute('href', `/page_base/${idTampo}`);

let fundoTampo = document.getElementById('fundo-tampo');


function trocatampo(img, descricao, idTampo){
    localStorage.setItem('imgTampo', img.src);
    localStorage.setItem('tituloTampo', img.alt);
    localStorage.setItem('descTampo', descricao);
    localStorage.setItem('idTampo', idTampo);
    document.location.reload(true);

}


