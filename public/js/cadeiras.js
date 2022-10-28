let imgCadeira = localStorage.getItem('imgCadeira');
let tituloCadeira = localStorage.getItem('tituloCadeira');
let descCadeira = localStorage.getItem('descCadeira');
let idCadeira = localStorage.getItem('idCadeira');

// document.getElementById('cadeiras-para-relatorio').setAttribute('href', `/page_cadeira/`);
document.getElementById('titulo-cadeira').innerHTML = tituloCadeira;
document.getElementById('desc-Cadeira').innerHTML = descCadeira;

let fundoCadeiraTampo = document.getElementById('fundo-tampo');
fundoCadeiraTampo.style.width = '100vw';
fundoCadeiraTampo.style.height = '400px';
fundoCadeiraTampo.style.backgroundImage = `url(${imgTampo})`;
fundoCadeiraTampo.style.backgroundSize = 'contain';
fundoCadeiraTampo.style.backgroundPosition = 'bottom';
fundoCadeiraTampo.style.backgroundRepeat = 'no-repeat';

let fundoCadeiraBase = document.getElementById('fundo-base');
fundoCadeiraBase.style.width = '100vw';
fundoCadeiraBase.style.height = '400px';
fundoCadeiraBase.style.backgroundImage = `url(${imgBase})`;
fundoCadeiraBase.style.backgroundSize = 'contain';
fundoCadeiraBase.style.backgroundPosition = 'top';
fundoCadeiraBase.style.backgroundRepeat = 'no-repeat';

function trocaCadeira(img, descricao, idCadeira){
    localStorage.setItem('imgCadeira', img.src);
    localStorage.setItem('tituloCadeira', img.alt);
    localStorage.setItem('descCadeira', descricao);
    localStorage.setItem('idCadeira', idCadeira);
    document.location.reload(true);

}
