<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $pagina = 'montemovel';

        $bases = Product::where('produto', '=' , 'base')->get();
        $tampos = Product::where('produto', '=' , 'tampo')->get();
        $vidros = Product::where('produto', '=' , 'vidro')->get();


        // $produtos = Product::all();

        return view('welcome', [
            'pagina' => $pagina,
            'bases' =>  $bases,
            'tampos' => $tampos,
            'vidros' => $vidros,

        ]);
    }


    public function cadeiras(){
        $pagina = 'cadeiras';

        return view('cadeiras', [
            'pagina' => $pagina
        ]);
    }


    public function insert(Request $request){
        $produto = new Product();

        $produto->produto = $request->produto;
        if($request->hasfile('imagem') && $request->file('imagem')->isvalid()){
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')). '.' . $extensao;
            $imagem->move(public_path('img/produtos'), $imagemNome);

            $produto->imagem = $imagemNome;
        }
        $produto->titulo = $request->titulo;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->altura = $request->altura;
        $produto->largura = $request->largura;
        $produto->comprimento = $request->comprimento;



        $produto->save();

        return redirect('home')->with('msg', 'Produto criado com sicesso!');
        
    }


}
