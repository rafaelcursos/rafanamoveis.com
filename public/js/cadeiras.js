function trocacadeira(img, name, description) {
    localStorage.setItem('imgCadeira', img);
    localStorage.setItem('nameCadeira', name);
    localStorage.setItem('descriptionCadeira', description);
    imgCadeiraArea.setAttribute('src', img);
}
