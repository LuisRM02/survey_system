<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function index(){
        //$objClient = new Client();
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function show(){
        return "hey hey, mas despacio";
    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'first_name' => 'required|string|max:100'
        ]);

        //Client::create($validated)
        return redirect()->route('clients.index');
        //echo "ya recibi los datos";
    }

    public function edit(){
        return "hora del editar";
    }

    public function destroy(){
        return "hora del eliminar";
    }
}
