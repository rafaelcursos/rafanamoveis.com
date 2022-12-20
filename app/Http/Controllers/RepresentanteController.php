<?php

namespace App\Http\Controllers;

use App\Models\Representante;
use App\Models\Regiao;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Http\Request;

class RepresentanteController extends Controller
{
    public function index(){
        $representantes = Representante::all();

        return view('admin.representantes.home', [
            'representantes' => $representantes
        ]);
    }

    public function novo(){
        $regiao = Regiao::all();
        $estado = Estado::all();
        return view('admin.representantes.novo', [
            'regiao' => $regiao,
            'estado' => $estado
        ]);
    }

    public function store(Request $request){

        
        $representante = new Representante();

        $image = $request->imagem;
        $imageName = $image->store('/', 'public');
        $representante->imagem = $imageName;

        $representante->nome = $request->nome;
        $representante->telefone = $request->telefone;
        $representante->regiao = $request->regiao;
        $representante->estado = $request->estado;
        $representante->cidade = $request->cidade;
        $representante->save();

        return back()->with('msg', 'Representante cadastrado com sucesso!');
    }

    public function editar($id){
        $representante = Representante::find($id);
        return view('admin.representantes.editar', [
            'representante' => $representante
        ]);
    }

    public function update($id)
    {
        $representante = Representante::find($id);
        return view('admin.representantes.atualizar', [
            'representante' => $representante
        ]);
    }

    public function updateAction(Request $request, $id){
        $representante = Representante::find($id);

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $representante->imagem = $imagemNome;
        }

        $representante->nome = $request->nome;
        $representante->telefone = $request->telefone;
        $representante->regiao = $request->regiao;
        $representante->estado = $request->estado;
        $representante->cidade = $request->cidade;

        $representante->save();

        return back()->with('msg', 'Produto cadastrado com sucesso!');;
    }

    public function destroy($id){
        $representante = Representante::find($id);
        $img = $representante->imagem;
        Storage::disk('public')->delete($img);
        $representante->delete();

        return redirect('/representantes')->with('msg', 'Representante removido com sucesso!');
    }

}
