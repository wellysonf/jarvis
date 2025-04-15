<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('produto');
    }
    public function store(Request $request){
        Product::create([
            'descricao' => $request->descricao,
            'estoque' => 20,
            'valor' => '20.15'
        ]);
        dd(Product::where('descricao',$request->descricao)->get());
        return "Chegou";
    }
}
