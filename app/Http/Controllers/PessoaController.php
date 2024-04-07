<?php

namespace App\Http\Controllers;

use App\Http\Resources\PessoaResource;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function index()
    {
        return PessoaResource::collection(Pessoa::all());
    }
}
