<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('aluno.index');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        Aluno::create($request->all());
        return view('aluno.index');
    }
}
