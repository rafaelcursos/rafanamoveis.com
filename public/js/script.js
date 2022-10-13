//setando os valores no localstorage dos tampos
function tampoAtual(titulo, descricao, imagem, altura, largura, comprimento){

    localStorage.setItem('t-titulo', titulo)
    localStorage.setItem('t-descricao', descricao)
    localStorage.setItem('t-imagem', imagem)
    localStorage.setItem('t-altura', altura)
    localStorage.setItem('t-largura', largura)
    localStorage.setItem('t-comprimento', comprimento)

    document.location.reload(true);

    
}
//Área das bases
//pegando os dados do localstorage
var tTitulo = localStorage.getItem('t-titulo')
var tDescricao = localStorage.getItem('t-descricao')
var tImagem = localStorage.getItem('t-imagem')
var tAltura = localStorage.getItem('t-altura')
var tLargura = localStorage.getItem('t-largura')
var tComprimento = localStorage.getItem('t-comprimento')
//setando os valores na pagina
document.getElementById('t-titulo').innerHTML = tTitulo
document.getElementById('t-descricao').innerHTML = '<h4>' + tTitulo + ': </h4>' + tDescricao
document.getElementById('t-img').setAttribute('src', 'img/produtos/'+ tImagem.trim())
document.getElementById('t-altura').innerHTML = tAltura
document.getElementById('t-largura').innerHTML = tLargura
document.getElementById('t-comprimento').innerHTML = tComprimento


//setando os valores no localstorage das bases
function baseAtual(titulo, descricao, imagem, altura, largura, comprimento){

    localStorage.setItem('b-titulo', titulo)
    localStorage.setItem('b-descricao', descricao)
    localStorage.setItem('b-imagem', imagem)
    localStorage.setItem('b-altura', altura)
    localStorage.setItem('b-largura', largura)
    localStorage.setItem('b-comprimento', comprimento)

    document.location.reload(true);

    
}
//Área das bases
//pegando os dados do localstorage
var bTitulo = localStorage.getItem('b-titulo')
var bDescricao = localStorage.getItem('b-descricao')
var bImagem = localStorage.getItem('b-imagem')
var bAltura = localStorage.getItem('b-altura')
var bLargura = localStorage.getItem('b-largura')
var bComprimento = localStorage.getItem('b-comprimento')
//setando os valores na pagina
document.getElementById('b-titulo').innerHTML = bTitulo
document.getElementById('b-descricao').innerHTML = '<h4>' + bTitulo + ': </h4>' + bDescricao
document.getElementById('b-img').setAttribute('src', 'img/produtos/'+ bImagem.trim())
document.getElementById('b-altura').innerHTML = bAltura
document.getElementById('b-largura').innerHTML = bLargura
document.getElementById('b-comprimento').innerHTML = bComprimento