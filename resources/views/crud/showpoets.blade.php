@extends('layouts.master')
@section('title', 'Poetas')
    @section('header')
        <br>
            <h1>Information Poets</h1>
        <br>
    @stop
    @section('navbar')
    @stop
    @section('content')
    <div>
    <a href="{{action('Crud@create')}}"><img src="{{url('/images/new.png')}}" alt=""></a>
    </div>
    <table class="table table-hover table-dark">
    <br>
    <thead>
        <tr>
        <th scope="col">poet_code</th>
        <th scope="col">firstname</th>
        <th scope="col">surname</th>
        <th scope="col">adress</th>
        <th scope="col">postcode</th>
        <th scope="col">telephone</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($poets as $poets)
            <tr>
            <th scope="row">{{$poets->poet_code}}</th>
            <td>{{$poets->firstname}}</td>
            <td>{{$poets->surname}}</td>
            <td>{{$poets->adress}}</td>
            <td>{{$poets->postcode}}</td>
            <td>{{$poets->telephone}}</td>
            <td> <a href="{{action('Crud@show',['id'=>$poets->poet_code])}}"><img src="{{url('/images/update.png')}}" alt=""></a></td>
            <td><a href="{{action('Crud@destroy',['id'=>$poets->poet_code])}}"><img src="{{url('/images/delete.png')}}" alt=""></td>
            </tr>
        @endforeach
    </tbody>
    </table>
    @stop
    @section('footer')
        @parent
    @stop