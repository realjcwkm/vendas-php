<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * @param  Request  $request
     */
    function getAllClientes(){
        $cliente = Cliente::all();

        return response($cliente, 200);
    }

    /* $validator = $this->validate($request, [
        'nome' => 'required|alpha|max:60',
        'email' => 'required|email|unique|max:30',
    ]); */
    function postCliente(Request $request){
        
        $validator = Validator::make($request->all(), [
            'nome' => 'required|alpha|max:60',
            'email' => 'required|unique:cliente|email|max:30',
        ]);

        if ($validator->fails()) {
            return response(array('errors' => true, $validator->errors()->all()), 404);
        }

        
        $cliente = Cliente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
        ]);

        return response($cliente, 201);
    }
}
