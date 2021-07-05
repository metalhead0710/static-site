@extends('layouts.app')

@section('meta')
    <title>Home</title>
    <meta name="keywords" content="Home, home page"/>
    <meta name="description" content="Home page description"/>
@endsection
@section('css')
    <style>
        p {
            color: #942626;
        }
    </style>
@endsection

@section('content')
    <p>I am home content stuff</p>
@endsection
@section('scripts')
    <script>
        console.log('I\'m called from home page')
    </script>
@endsection
