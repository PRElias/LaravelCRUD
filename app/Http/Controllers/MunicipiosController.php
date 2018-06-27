<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\MUNICIPIOS;
use App\Models\UNIDADES_FEDERATIVAS;

class MunicipiosController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAll()
    {
        $municipios = MUNICIPIOS::all();

        return View('municipios', array('municipios' => $municipios));
    }

    public function novo()
    {
        $uf = UNIDADES_FEDERATIVAS::pluck('NOM_UNIDADE_FEDERATIVA','SGL_UNIDADE_FEDERATIVA');
        return View('municipios-novo', array('uf' => $uf));
    }
  
    public function salvar(Request $request)
    {
        if ($request->inputCod == null){
            $municipios = new MUNICIPIOS;
        }
        else {
            $municipios = MUNICIPIOS::find($request->inputCod);
        }
        //$municipios = new MUNICIPIOS;
        $municipios->NOM_MUNICIPIO                  = $request->inputNome;
        $municipios->NUM_POPULACAO                  = $request->inputPopulacao;
        $municipios->NOM_PREFEITO                   = $request->inputPrefeito;
        $municipios->SGL_UNIDADE_FEDERATIVA         = $request->inputUF;
        $municipios->save();
        return redirect()->route('municipios')->with('message', 'Município criado/editado com sucesso!');
    }

    public function excluir($id)
    {
        $municipio = MUNICIPIOS::find($id);
        $municipio->delete();
        return redirect()->route('municipios')->with('message', 'Município excluído com sucesso!');
    }

    public function editar($id)
    {
        $municipio = MUNICIPIOS::find($id);
        $uf = UNIDADES_FEDERATIVAS::pluck('NOM_UNIDADE_FEDERATIVA','SGL_UNIDADE_FEDERATIVA');
        return View('municipios-editar', array('municipio' => $municipio), array('uf' => $uf));
    }

}

