@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        @include('graph.total')
        <div class="row">
            <div class="col-4 border-right">@include('graph.subnet')</div>
            <div class="col-6"><h3>bbbbbb</h3></div>
        </div>
        @include('graph.table')
        @endauth

        @guest
        <h1>Dashboard</h1>
        <p class="lead">Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection