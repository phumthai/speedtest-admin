@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        @include('graph.total')
        @include('graph.table')
        @endauth

        @guest
        <h1>Dashboard</h1>
        <p class="lead">Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection