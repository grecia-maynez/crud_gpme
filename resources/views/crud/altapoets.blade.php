@extends('layouts.master')
@if(isset($poets) and is_object ($poets))
    @php
        $title='Modification';
        $id = $poets->poet_code;
        $poet_code = $poets->poet_code;
        $firstname = $poets->firstname;
        $surname = $poets->surname;
        $adress = $poets->adress;
        $postcode = $poets->postcode;
        $telephone = $poets->telephone;
    @endphp
@else
    @php
        $title='Add';
        $id = '';
        $poet_code = '';
        $firstname = '';
        $surname = '';
        $adress = '';
        $postcode = '';
        $telephone = '';
    @endphp
@endif
@section('title', 'Poetas')
    @section('header')
        <br>
            {{$title}}
        <br>
    @stop
    @section('navbar')
    @stop
    @section('content')
    <form action="{{isset($poets) ? action('Crud@update') :action('Crud@store')}}" method="post">
        {{csrf_field()}}
        @if(isset($poets) and is_object ($poets))
            <input type="hidden" name="id" value="{{$id}}">
        @endif
            <label for="poet_code">poet_code</label>
            <input type="text" name="poet_code" placeholder="...">
            <br>
            <label for="firstname">firstname</label>
            <input type="text" name="firstname" placeholder="...">
            <br>
            <label for="surname">surname</label>
            <input type="text" name="surname" placeholder="...">
            <br>
            <label for="adress">adress</label>
            <input type="text" name="adress" placeholder="...">
            <br>
            <label for="postcode">postcode</label>
            <input type="text" name="postcode" placeholder="...">
            <br>
            <label for="telephone">telephone</label>
            <input type="text" name="telephone" placeholder="...">
            <br><br>
            <input type="submit" value="SUBMIT" id="boton">
    </form>
    @stop
    @section('footer')
        @parent
    @stop