<?php

namespace App\Http\Controllers;

use App\Models\Corproduto;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Tamanho;
use App\Models\Tecido;
use App\Models\Tipo;

class ProdutoController extends Controller
{
    //#############################################################################
    //Aqui é exibido a pagina inicial do site
    public function index()
    {
        $produtos = Produto::all();
        return view('inicio', ['produtos' => $produtos]);
    }

    //##############################################################################
    //Esta função exibe a view da pagina1
    public function pagina1($id)
    {
        if ($id) {
            $produto = Produto::findOrFail($id);
            return view('pagina1', ['produto' => $produto, 'pagina' => 'pagina1']);
        }
        return view('pagina1');
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
        $tecidos = Tecido::all();
        $tamanhos = Tamanho::all();
        return view('novoproduto', ['tipos' => $tipos, 'tamanhos' => $tamanhos, 'tecidos' => $tecidos]);
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

        $produto->save();

        return redirect('novoproduto')->with('msg', true);
    }

    //################################################################################
    //Esta função exibe a view do formulário de associação de produto e cor
    public function associarcor()
    {
        $cores = Corproduto::all();
        $produtos = Produto::all();
        return view('associarcor', ['cores' => $cores, 'produtos' => $produtos]);
    }
    //Aqui acontece a inserção no banco de dados de associação de produto e cor
    public function associarcorinsert(Request $request)
    {
        $produto = Produto::find($request->produto);
        $corId = $request->cor;
        $produto->corprodutos()->attach($corId);
        return redirect('/associar/cor')->with('msg', 'Cor associada ao produto');
    }

        //################################################################################
    //Esta função exibe a view do formulário de associação de produto e cor
    public function associartecido()
    {
        $tecidos = Tecido::all();
        $produtos = Produto::all();
        return view('associartecido', ['tecidos' => $tecidos, 'produtos' => $produtos]);
    }
    //Aqui acontece a inserção no banco de dados de associação de produto e cor
    public function associartecidoinsert(Request $request)
    {
        $produto = Produto::find($request->produto);
        $tecidoId = $request->tecido;
        $produto->tecidos()->attach($tecidoId);
        return redirect('/associar/tecido')->with('msg', 'Tecido associado ao produto');
    }

    //################################################################################
    //Esta função exibe a view do formulário de associação de produto e cor
    public function associartamanho()
    {
        $tamanhos = Tecido::all();
        $produtos = Produto::all();
        return view('associartamanho', ['tamanhos' => $tamanhos, 'produtos' => $produtos]);
    }
    //Aqui acontece a inserção no banco de dados de associação de produto e cor
    public function associartamanhoinsert(Request $request)
    {
        $produto = Produto::find($request->produto);
        $tamanhoId = $request->tamanho;
        $produto->tamanhos()->attach($tamanhoId);
        return redirect('/associar/tamanho')->with('msg', 'tamanho associado ao produto');
    }





    //#######################################################################################
    //Função que deleta um produto do banco de dados
    public function deletar($id)
    {
        $p = Produto::find($id);
        $p->delete();
        return redirect('home')->with('msg', 'Produto deletado com sucesso!');
    }
}
