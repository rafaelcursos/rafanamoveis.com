//setando os valores no localstorage dos tampos
// function definir(titulo, descricao, imagem, altura, largura, comprimento){

//     localStorage.setItem('t-titulo', titulo)
//     localStorage.setItem('t-descricao', descricao)
//     localStorage.setItem('t-imagem', imagem)
//     localStorage.setItem('t-altura', altura)
//     localStorage.setItem('t-largura', largura)
//     localStorage.setItem('t-comprimento', comprimento)

//     document.location.reload(true);

    
// }
//Área das bases
//pegando os dados do localstorage
var ctTitulo = localStorage.getItem('t-titulo')
// var tDescricao = localStorage.getItem('t-descricao')
var ctImagem = localStorage.getItem('t-imagem')
// var tAltura = localStorage.getItem('t-altura')
// var tLargura = localStorage.getItem('t-largura')
// var tComprimento = localStorage.getItem('t-comprimento')
//setando os valores na pagina
document.getElementById('c-t-titulo').innerHTML = ctTitulo
// document.getElementById('t-descricao').innerHTML = '<h4>' + tTitulo + ': </h4>' + tDescricao
document.getElementById('c-t-img').setAttribute('src', 'img/produtos/'+ ctImagem.trim())
// document.getElementById('t-altura').innerHTML = tAltura
// document.getElementById('t-largura').innerHTML = tLargura
// document.getElementById('t-comprimento').innerHTML = tComprimento


//setando os valores no localstorage das bases
// function defin(titulo, descricao, imagem, altura, largura, comprimento){

//     localStorage.setItem('b-titulo', titulo)
//     localStorage.setItem('b-descricao', descricao)
//     localStorage.setItem('b-imagem', imagem)
//     localStorage.setItem('b-altura', altura)
//     localStorage.setItem('b-largura', largura)
//     localStorage.setItem('b-comprimento', comprimento)

//     document.location.reload(true);

    
// }
//Área das bases
//pegando os dados do localstorage
var cbTitulo = localStorage.getItem('b-titulo')
// var bDescricao = localStorage.getItem('b-descricao')
var cbImagem = localStorage.getItem('b-imagem')
// var bAltura = localStorage.getItem('b-altura')
// var bLargura = localStorage.getItem('b-largura')
// var bComprimento = localStorage.getItem('b-comprimento')
//setando os valores na pagina
document.getElementById('c-b-titulo').innerHTML = cbTitulo
// document.getElementById('b-descricao').innerHTML = '<h4>' + bTitulo + ': </h4>' + bDescricao
document.getElementById('c-b-img').setAttribute('src', 'img/produtos/'+ cbImagem.trim())
// document.getElementById('b-altura').innerHTML = bAltura
// document.getElementById('b-largura').innerHTML = bLargura
// document.getElementById('b-comprimento').innerHTML = bComprimento