<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $fornecedores = Fornecedor::all();
        
        return view('indexFornecedor', compact('fornecedores'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedorForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $fornecedor = Fornecedor::create([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'email' => $request->email
        ]);
        return back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $FornecedoDeletado = Fornecedor::onlyTrashed()->get();
        // return view('inativo',compact('FornecedorDeletado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $fornecedor = Fornecedor::findOrFail($id);
        
        return view('fornecedorForm',compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        $fornecedores = Fornecedor::all();
        return view('indexFornecedor', compact('fornecedores'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = fornecedor::findOrFail($id);
        $fornecedor->delete();
        return back();
    }
}
