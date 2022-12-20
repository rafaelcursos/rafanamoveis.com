let imgTampoCadeira = localStorage.getItem('imgTampo');
let imgCadeira = localStorage.getItem('imgCadeira');

if(imgTampoCadeira) {
    let tampo = document.getElementById('tampo-cadeira');
    tampo.setAttribute('src', imgTampoCadeira);
}

function trocacadeira(img, name, description) {
    localStorage.setItem('imgCadeira', img);
    localStorage.setItem('nameCadeira', name);
    localStorage.setItem('descriptionCadeira', description);
    cadeira.setAttribute('src', img);
}

if(imgCadeira) {
    let cadeira = document.getElementById('cadeira');
    cadeira.setAttribute('src', imgCadeira);
}



