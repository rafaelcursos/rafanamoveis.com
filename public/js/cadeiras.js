if(imgCadeira){
    imgCadeiraArea.setAttribute('src', imgCadeira);
}
if(nomeCadeira){
    nomeCadeiraArea.innerHTML = nomeCadeira;
}
if(descricaoCadeira){
    descricaoCadeiraArea.innerHTML = descricaoCadeira;
}
function trocacadeira(img, name, description) {
    localStorage.setItem('imgCadeira', img);
    localStorage.setItem('nameCadeira', name);
    localStorage.setItem('descriptionCadeira', description);
    imgCadeiraArea.setAttribute('src', img);
}
