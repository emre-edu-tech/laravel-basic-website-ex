@extends('master')

@section('title', 'Home')

@section('content')

        <div class="container mt-4 mb-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="mt-4">Laravel Example Website</h1>
                    <h3 class="mt-4">Web Application Development</h3>
                    <img src="{{ asset('images/web-dev.jpeg') }}" alt="Web development" class="img-fluid">
                </div>
            </div>
        </div>

@endsection
