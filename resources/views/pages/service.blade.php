@extends('layouts.app')

@section('meta')
    <title>{{ $service->title }}</title>
    <meta name="keywords" content="{{ $service->meta_keywords }}"/>
    <meta name="description" content="{{ $service->meta_description }}"/>
@endsection
@section('css')
    <style>
        body {
            background: #943576;
        }
    </style>
@endsection

@section('content')
    <h1>{{ $service->title }}</h1>
    <img src="{{ asset( $service->image ) }}" width="150" />
    <p>{{ $service->text }}</p>
@endsection
@section('scripts')
    <script>
        console.log('I\'m called from one service page')
    </script>
@endsection

