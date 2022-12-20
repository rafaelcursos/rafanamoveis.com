// area das bases
function trocabase(img, name, description, id, vitrine) {
    localStorage.setItem('imgBase', img);
    localStorage.setItem('nameBase', name);
    localStorage.setItem('descriptionBase', description);
    imgBaseArea.setAttribute('src', img);
    nomeBaseArea.innerHTML = name;
    btnProximo.setAttribute('href', `/site/bases/cor/${vitrine}/${id}`);

}

function trocacor(img, nomeCor, vitrineId) {
    localStorage.setItem('imgBase', img);
    localStorage.setItem('nomeCor', nomeCor);
    window.location.href = `/site/tampos/${vitrineId}`;
}

if (imgBase) {
    imgBaseArea.setAttribute('src', imgBase);
}