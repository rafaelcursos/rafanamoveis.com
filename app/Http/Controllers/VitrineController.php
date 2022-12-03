<?php

namespace App\Http\Controllers;

use App\Models\Base;
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

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function conectBase($id)
    {
        $vitrine = Vitrine::find($id);
        $bases = Base::all();

        return view('admin.vitrine.base', [
            'vitrine' => $vitrine,
            'bases' => $bases
        ]);
    }

    public function baseDesassociar($vitrineId , $baseId ){
        $vitrine = Vitrine::find(intval($vitrineId));
        
        $vitrine->bases()->detach(intval($baseId));
        return back()->with('msg', 'Produto removido com sucesso!');
    }

    public function conectBaseAction( Request $request ,$id){
        $vitrine = Vitrine::find($id);

        $vitrine->bases()->attach(intval($request->base));
        return back()->with('msg', 'Produto adcionado com sucesso!');
    }

    public function conectTampo()
    {
        return view('admin.vitrine.tampo');
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

        return back()->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function destroy($id){
        $vitrine = Vitrine::find($id);
        $img = $vitrine->imagem;
        Storage::disk('public')->delete($img);
        $vitrine->delete();

        return redirect('/home')->with('msg', 'Produto removido com sucesso!');
    }
}
