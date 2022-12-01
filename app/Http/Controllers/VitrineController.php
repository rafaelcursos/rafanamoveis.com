<?php

namespace App\Http\Controllers;

use App\Models\Vitrine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VitrineController extends Controller
{
    public function novo()
    {
        return view('admin.vitrine.novo');
    }

    public function editar($id)
    {
        $vitrine = Vitrine::find($id);
        return view('admin.vitrine.editar', [
            'vitrine' => $vitrine
        ]);
    }

    public function update($id)
    {
        $vitrine = Vitrine::find($id);
        return view('admin.vitrine.atualizar', [
            'vitrine' => $vitrine
        ]);
    }

    public function updateAction(Request $request, $id){
        $vitrine = Vitrine::find($id);

        $vitrine->nome = $request->nome;
        $vitrine->descricao = $request->descricao;

        if($request->imagem){
            $imagem = $request->imagem;
            $imagemNome = $imagem->store('/', 'public');
            $vitrine->imagem = $imagemNome;
        }

        $vitrine->save();

        return back();
    }

    public function conectTampo()
    {
        return view('admin.vitrine.tampo');
    }

    public function conectBase()
    {
        return view('admin.vitrine.base');
    }

    public function conectCadeira()
    {
        return view('admin.vitrine.cadeira');
    }

    public function store(Request $request){

        $vitrine = new Vitrine();

        $vitrine->nome = $request->nome;
        $vitrine->descricao = $request->descricao;

        $image = $request->imagem;
        $imageName = $image->store('/', 'public');

        $vitrine->imagem = $imageName;

        $vitrine->save();

        return back()->with('msg', 'Cadastrado com sucesso!');
    }

    public function destroy($id){
        $vitrine = Vitrine::find($id);
        $img = $vitrine->imagem;
        Storage::disk('public')->delete($img);
        $vitrine->delete();

        return redirect('/painel');
    }
}
