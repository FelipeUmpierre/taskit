<?php

namespace App\Http\Controllers;

use App\Client;
use App\Repositories\ClientRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    protected $repository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->repository = $clientRepository;
    }

    public function index()
    {
        return response()->json($this->repository->all());
    }

    public function find($id)
    {
        return response()->json($this->repository->find($id));
    }

    public function projectsFrom($id)
    {
        return response()->json($this->repository->find($id)->projects()->get());
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
