<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        return response()->json(Client::all());
    }

    public function find(Client $client)
    {
        return response()->json($client->get());
    }

    public function projectsFrom(Client $client)
    {
        return response()->json($client->projects()->get());
    }

    public function save(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->getMessageBag()->all());
        }

        try {
            $client = Client::updateOrCreate([
                'id' => $request->get('id')
            ], $request->all());

            return response()->json($client);
        } catch (\Exception $e) {
            return response()->json([
                'message' => Lang::get('errors.not_saved', [
                    'model' => 'client'
                ]),
                'error' => $e->getMessage()
            ]);
        }
    }
}
