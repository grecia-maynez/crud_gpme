@extends('layouts.master')
@section('title', 'Principal')
    @section('header')
        <br>
            <h1>Inicio sesion</h1>
        <br>
    @stop
    @section('navbar')
    @stop
    @section('content')
        <form action="{{action('EstructurasDeControl@validarlogin')}}" method="post">
            {{csrf_field()}}
            <label for="user">User</label>
            <input type="text" name="user">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <br>
            <label for="key">Key</label>
            <input type="text" name="key">
            <br>
            <input type="submit" value="submit">
        </form>
    @stop
    @section('footer')
        @parent
    @stop