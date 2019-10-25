<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Entreprise;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::status();

    
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        $entreprises = Entreprise::all();

        return view('clients.create', compact('entreprises'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        
        Client::create($data);

        return back();
    }
}
