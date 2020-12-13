<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poets = DB::table('poets')
        ->orderBy('poet_code')
        ->get();
        return view('crud.showpoets',[
            'poets' => $poets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.altapoets');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poets=DB::table('poets')
        ->insert([
            'poet_code'=>$request->input('poet_code'),
            'firstname'=>$request->input('firstname'),
            'surname'=>$request->input('surname'),
            'adress'=>$request->input('adress'),
            'postcode'=>$request->input('postcode'),
            'telephone'=>$request->input('telephone')
        ]);
        return redirect()->action('Crud@index')
        ->with('status','Su insercion ha sido exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poets = DB::table('poets')
        ->where('poet_code','=', $id)
        ->first();
        return view('crud.altapoets',['poets'=> $poets]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $poets = DB::table('poets')
        ->where('poet_code','=', $request->input('id'))
        ->update([
            'poet_code'=>$request->input('poet_code'),
            'firstname'=>$request->input('firstname'),
            'surname'=>$request->input('surname'),
            'adress'=>$request->input('adress'),
            'postcode'=>$request->input('postcode'),
            'telephone'=>$request->input('telephone')
        ]);
        return redirect()->action('Crud@index')
            ->with('status','Su modificacion ha sido exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poets = DB::table('poets')
        ->where('poet_code','=', $id)
        ->delete();
        return redirect()->action('Crud@index')
            ->with('status','La destruccion ha sido exitosa');
    }
}
