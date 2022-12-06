<?php

namespace App\Http\Controllers;

use App\Models\Cadeira;
use App\Models\Cor;
use App\Models\Tamanho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CadeiraController extends Controller
{
    public function index(){
        $cadeiras = Cadeira::all();
        return view('admin.cadeiras.home', [
            'cadeiras' => $cadeiras
        ]);
    }

    public function novo(){
        return view('admin.cadeiras.novo');
    }

    public function store(Request $request){

        $cadeira = new Cadeira();

        $cadeira->nome = $request->nome;
        $cadeira->descricao = $request->descricao;

        $image = $request->imagem;
        $imageName = $image->store('/', 'public');

        $cadeira->imagem = $imageName;

        $cadeira->save();

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function editar($id){
        $cadeira = Cadeira::find($id);
        return view('admin.cadeiras.editar', [
            'cadeira' => $cadeira
        ]);
    }

    public function update($id)
    {
        $cadeiras = Cadeira::find($id);
        return view('admin.cadeiras.atualizar', [
            'cadeiras' => $cadeiras
        ]);
    }

    public function updateAction(Request $request, $id){
        $cadeiras = Cadeira::find($id);

        $cadeiras->nome = $request->nome;
        $cadeiras->descricao = $request->descricao;

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $cadeiras->imagem = $imagemNome;
        }

        $cadeiras->save();

        return back()->with('msg', 'Produto cadastrado com sucesso!');;
    }

    public function destroy($id){
        $cadeiras = Cadeira::find($id);
        $img = $cadeiras->imagem;
        Storage::disk('public')->delete($img);
        $cadeiras->delete();

        return redirect('/cadeiras')->with('msg', 'Produto removido com sucesso!');
    }

    public function tamanho($id){
        $cadeira = Cadeira::find($id);
        return view('admin.cadeiras.tamanho', [
            'cadeira' => $cadeira
        ]);
    }

    public function tamanhoAction(Request $request, $id){
        $cadeira = Cadeira::find($id);
        $tamanho = new Tamanho();
        $tamanho->altura = $request->altura;
        $tamanho->largura = $request->largura;
        $tamanho->comprimento = $request->comprimento;
        $tamanho->save();

        $t = Tamanho::orderby('id', 'desc')->first();
        $cadeira->tamanhos()->attach(intval($t->id));

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function tamanhoDestroy($id){
        $tamanho = Tamanho::find($id);
        $tamanho->delete();
        return back()->with('msg', 'Produto removido com sucesso!');

    }

    public function cor($id){
        $cadeira = Cadeira::find($id);
        return view('admin.cadeiras.cor', [
            'cadeira' => $cadeira
        ]);
    }

    public function corAction(Request $request, $id){
        $cadeira = Cadeira::find($id);

        $cor = new Cor();
        $cor->nome = $request->nome;

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $cor->imagem = $imagemNome;
        }

        $cor->save();

        $c = Cor::orderby('id', 'desc')->first();
        $cadeira->cores()->attach(intval($c->id));

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function corDesassociar($corId, $cadeiraId){
        $cor = Cor::find($corId);
        $cadeira = Cadeira::find($cadeiraId);
        $cadeira->cores()->detach(intval($cor->id));
        return back()->with('msg', 'Produto removido com sucesso!');
    }
}
