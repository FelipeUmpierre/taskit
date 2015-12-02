<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        // return response()->json(Client::all());
        return view('client.index')->with('clients', Client::all());
    }

    public function save(Request $request)
    {

    }

    public function find($id)
    {
        return response()->json(Client::findOrFail($id));
    }
}
