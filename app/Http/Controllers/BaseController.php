<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Cor;
use App\Models\Tamanho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    public function index(){
        $bases = Base::all();

        return view('admin.bases.home', [
            'bases' => $bases
        ]);
    }

    public function novo(){
        return view('admin.bases.novo');
    }

    public function store(Request $request){

        $base = new Base();

        $base->nome = $request->nome;
        $base->descricao = $request->descricao;

        $image = $request->imagem;
        $imageName = $image->store('/', 'public');

        $base->imagem = $imageName;

        $base->save();

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function editar($id){
        $base = Base::find($id);
        return view('admin.bases.editar', [
            'base' => $base
        ]);
    }

    public function update($id)
    {
        $bases = Base::find($id);
        return view('admin.bases.atualizar', [
            'bases' => $bases
        ]);
    }

    public function updateAction(Request $request, $id){
        $bases = Base::find($id);

        $bases->nome = $request->nome;
        $bases->descricao = $request->descricao;

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $bases->imagem = $imagemNome;
        }

        $bases->save();

        return back()->with('msg', 'Produto cadastrado com sucesso!');;
    }

    public function destroy($id){
        $bases = Base::find($id);
        $img = $bases->imagem;
        Storage::disk('public')->delete($img);
        $bases->delete();

        return redirect('/bases')->with('msg', 'Produto removido com sucesso!');
    }

    public function tamanho($id){
        $base = Base::find($id);
        return view('admin.bases.tamanho', [
            'base' => $base
        ]);
    }

    public function tamanhoAction(Request $request, $id){
        $base = Base::find($id);
        $tamanho = new Tamanho();
        $tamanho->altura = $request->altura;
        $tamanho->largura = $request->largura;
        $tamanho->comprimento = $request->comprimento;
        $tamanho->save();

        $t = Tamanho::orderby('id', 'desc')->first();
        $base->tamanhos()->attach(intval($t->id));

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function tamanhoDestroy($id){
        $tamanho = Tamanho::find($id);
        $tamanho->delete();
        return back()->with('msg', 'Produto removido com sucesso!');

    }

    public function cor($id){
        $base = Base::find($id);
        return view('admin.bases.cor', [
            'base' => $base
        ]);
    }

    public function corAction(Request $request, $id){
        $base = Base::find($id);

        $cor = new Cor();
        $cor->nome = $request->nome;

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $cor->imagem = $imagemNome;
        }

        $cor->save();

        $c = Cor::orderby('id', 'desc')->first();
        $base->cores()->attach(intval($c->id));

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function corDesassociar($corId, $baseId){
        $cor = Cor::find($corId);
        $base = Base::find($baseId);
        $base->cores()->detach(intval($cor->id));
        return back()->with('msg', 'Produto removido com sucesso!');
    }


}
