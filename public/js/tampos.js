function trocatampo(img, name, description) {
    localStorage.setItem('imgTampo', img);
    localStorage.setItem('nameTampo', name);
    localStorage.setItem('descriptionTampo', description);
    imgTampoArea.setAttribute('src', img);
    nomeTampoArea.innerHTML = name;
}

function setTamanho(altura, largura, comprimento, item) {
    btnTamanhos.forEach(function (botao) {
        botao.classList.remove('active');
    });

    localStorage.setItem('altura', altura);
    localStorage.setItem('largura', largura);
    localStorage.setItem('comprimento', comprimento);
    tampoTamanho.innerHTML = `${largura} X ${comprimento}`;
    item.classList.add('active');
}

if (larguraTampo && comprimentoTampo){
    tampoTamanho.innerHTML = `${larguraTampo} X ${comprimentoTampo}`;
}
