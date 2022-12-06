<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use App\Models\Tamanho;
use App\Models\Tampo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TampoController extends Controller
{
    public function index(){
        $tampos = Tampo::all();
        return view('admin.tampos.home', [
            'tampos' => $tampos
        ]);
    }

    public function novo(){
        return view('admin.tampos.novo');
    }

    public function store(Request $request){

        $tampo = new Tampo();

        $tampo->nome = $request->nome;
        $tampo->descricao = $request->descricao;

        $image = $request->imagem;
        $imageName = $image->store('/', 'public');

        $tampo->imagem = $imageName;

        $tampo->save();

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function editar($id){
        $tampo = Tampo::find($id);
        return view('admin.tampos.editar', [
            'tampo' => $tampo
        ]);
    }

    public function update($id)
    {
        $tampos = Tampo::find($id);
        return view('admin.tampos.atualizar', [
            'tampos' => $tampos
        ]);
    }

    public function updateAction(Request $request, $id){
        $tampos = Tampo::find($id);

        $tampos->nome = $request->nome;
        $tampos->descricao = $request->descricao;

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $tampos->imagem = $imagemNome;
        }

        $tampos->save();

        return back()->with('msg', 'Produto cadastrado com sucesso!');;
    }

    public function destroy($id){
        $tampos = Tampo::find($id);
        $img = $tampos->imagem;
        Storage::disk('public')->delete($img);
        $tampos->delete();

        return redirect('/tampos')->with('msg', 'Produto removido com sucesso!');
    }

    public function tamanho($id){
        $tampo = Tampo::find($id);
        return view('admin.tampos.tamanho', [
            'tampo' => $tampo
        ]);
    }

    public function tamanhoAction(Request $request, $id){
        $tampo = Tampo::find($id);
        $tamanho = new Tamanho();
        $tamanho->altura = $request->altura;
        $tamanho->largura = $request->largura;
        $tamanho->comprimento = $request->comprimento;
        $tamanho->save();

        $t = Tamanho::orderby('id', 'desc')->first();
        $tampo->tamanhos()->attach(intval($t->id));

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function tamanhoDestroy($id){
        $tamanho = Tamanho::find($id);
        $tamanho->delete();
        return back()->with('msg', 'Produto removido com sucesso!');

    }

    public function cor($id){
        $tampo = Tampo::find($id);
        return view('admin.tampos.cor', [
            'tampo' => $tampo
        ]);
    }

    public function corAction(Request $request, $id){
        $tampo = Tampo::find($id);

        $cor = new Cor();
        $cor->nome = $request->nome;

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $cor->imagem = $imagemNome;
        }

        $cor->save();

        $c = Cor::orderby('id', 'desc')->first();
        $tampo->cores()->attach(intval($c->id));

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function corDesassociar($corId, $TampoId){
        $cor = Cor::find($corId);
        $tampo = Tampo::find($TampoId);
        $tampo->cores()->detach(intval($cor->id));
        return back()->with('msg', 'Produto removido com sucesso!');
    }
}
