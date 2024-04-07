<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index(Request $request)
    {
        return 'Meu nome é '.$request->get('param') ?? 'No param found';
    }
}
