<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use Illuminate\Support\Facades\Validator;

class VendaController extends Controller
{
    function getAllVendas(){
        // $venda = Venda::all();
        $venda = Venda::with("cliente")->with("produto")->get();

        return response($venda, 200);
    }

    function postVenda(Request $request){
        
        $validator = Validator::make($request->all(), [
            'cliente_id' => 'required|integer',
            'produto_id' => 'required|integer',
            'quantidade_vendida' => 'required|integer',
            'valor_total' => 'required|numeric',
            'data_venda' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response(array('errors' => true, $validator->errors()->all()), 404);
        }

        
        $venda = Venda::create([
            'cliente_id' => $request->input('cliente_id'),
            'produto_id' => $request->input('produto_id'),
            'quantidade_vendida' => $request->input('quantidade_vendida'),
            'valor_total' => $request->input('valor_total'),
            'data_venda' => $request->input('data_venda'),
        ]);

        return response($venda, 201);
    }

    function deleteVenda($id){
        $venda = Venda::where("id", $id)->first();

        if($venda == null){
            return response("Venda não existe\n", 404);
        }
        $venda->delete();
        return response("Venda deletada\n", 200);
    }
}
