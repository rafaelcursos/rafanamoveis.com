<?php

namespace App\Http\Controllers;


use App\Models\Linha;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Tipo;
use App\Models\Vitrine;

class ProdutoController extends Controller
{
    //#############################################################################
    //Aqui é exibido a pagina inicial do site
    public function index()
    {
        $produtos = Vitrine::all();
        return view('inicio', ['produtos' => $produtos]);
    }

    //##############################################################################
    //Esta função exibe a view da pagina1
    public function pagina1($nome)
    {
        $produto = Produto::where('linha', '=', $nome)->get();

        return view('pagina1', ['produto' => $produto, 'pagina' => 'pagina1']);
    }

    //###############################################################################
    //Esta função exibe a view da pagina2
    public function pagina2($id)
    {
        $produto = Produto::findOrFail($id);

        return view('pagina2', ['produto' => $produto, 'pagina' => 'pagina2']);
    }

    //################################################################################
    //Esta função exibe a view de formulário de novo produto
    public function novoproduto()
    {
        $tipos = Tipo::all();
        $linha = Linha::all();
        return view('/novoproduto', ['tipos' => $tipos,  'linha' => $linha]);
    }

    public function vitrine(){
        $linha = Linha::all();
        return view('/vitrineform', ['linha' => $linha]);
    }

    public function insertvitrine(Request $request){

        $produto = new Vitrine();

        $produto->produto = $request->produto;
        $produto->linha = $request->linha;
        if ($request->hasfile('imagem') && $request->file('imagem')->isvalid()) {
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensao;
            $imagem->move(public_path('img/vitrine'), $imagemNome);

            $produto->imagem = $imagemNome;
        }
        $produto->descricao = $request->descricao;

        $produto->save();

        return redirect('/novoproduto/vitrine')->with('msg', 'Produto cadastrado com sucesso!');
    }

    //Esta é a função de inserção de um novo produto no banco de dados
    public function insert(Request $request)
    {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->tipo = $request->tipo;
        if ($request->hasfile('imagem') && $request->file('imagem')->isvalid()) {
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensao;
            $imagem->move(public_path('img/produtos'), $imagemNome);

            $produto->imagem = $imagemNome;
        }
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->linha = $request->linha;

        $produto->save();

        return redirect('/novoproduto')->with('msg', 'Produto cadastrado com sucesso!');
    }

    //#######################################################################################
    //Função que deleta um produto do banco de dados
    public function deletar($id)
    {
        $p = Produto::find($id);
        $p->corprodutos()->detach();
        $p->tecidos()->detach();
        $p->tamanhos()->detach();
        $p->delete();
        return redirect('/home')->with('msg', 'Produto deletado com sucesso!');
    }
}
