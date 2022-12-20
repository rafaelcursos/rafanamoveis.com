function trocacadeira(img, name, description) {
    localStorage.setItem('imgCadeira', img);
    localStorage.setItem('nameCadeira', name);
    localStorage.setItem('descriptionCadeira', description);
    cadeira.setAttribute('src', img);
}
