<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\UNIDADES_FEDERATIVAS;

class UFController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAll()
    {
        $uf = UNIDADES_FEDERATIVAS::all();

        return View('uf', array('uf' => $uf));
    }

    public function novo()
    {
        return View('uf-novo');
    }
  
    public function salvar(Request $request)
    {
        if ($request->inputSigla == null){
            $uf = new UNIDADES_FEDERATIVAS;
        }
        else {
            $uf = UNIDADES_FEDERATIVAS::find($request->inputSigla);
            if($uf == null)
            {
                $uf = new UNIDADES_FEDERATIVAS;
                $uf->SGL_UNIDADE_FEDERATIVA = $request->inputSigla;
            }
        }
        $uf->NOM_UNIDADE_FEDERATIVA       = $request->inputNome;
        $uf->save();
        return redirect()->route('uf')->with('message', 'Unidade Federativa criado/editado com sucesso!');
    }

    public function excluir($id)
    {
        $uf = UNIDADES_FEDERATIVAS::find($id);
        $uf->delete();
        return redirect()->route('uf')->with('message', 'Unidade Federativa excluído com sucesso!');
    }

    public function editar($id)
    {
        $uf = UNIDADES_FEDERATIVAS::find($id);
        return View('uf-editar', array('uf' => $uf));
    }


}

