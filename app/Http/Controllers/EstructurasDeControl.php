<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class EstructurasDeControl extends Controller
    {
        //
        public function welcome(){
            return redirect()->action('EstructurasDeControl@inicio');
        }
        public function inicio (){
            return view('inicio',[
                'title'=>'Principal-GPME'
                ]);
        }
        public function login(){
            return view('login');
        }
        public function validarlogin(Request $request){
            $user=$request->input('user');
            $pass=$request->input('password');
            $key=$request->input('key');
    
            if($user==='Maynez'){
                $url='inicio';
            }
            else{
                $url='login';
            }
    
            return view('inicio');
        }}