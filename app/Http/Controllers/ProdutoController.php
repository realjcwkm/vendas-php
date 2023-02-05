<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    function getAllProdutos(){
        $produto = Produto::all();

        return response($produto, 200);
    }

    function postProduto(Request $request){
        
        $validator = Validator::make($request->all(), [
            'nome' => 'required|alpha|max:60',
            'quantidade' => 'required|integer',
            'valor_unitario' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response(array('errors' => true, $validator->errors()->all()), 404);
        }

        
        $produto = Produto::create([
            'nome' => $request->input('nome'),
            'quantidade' => $request->input('quantidade'),
            'valor_unitario' => $request->input('valor_unitario'),
        ]);

        return response($produto, 201);
    }
}
