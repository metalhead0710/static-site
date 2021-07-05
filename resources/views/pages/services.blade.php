@extends('layouts.app')

@section('meta')
    <title>Services</title>
    <meta name="keywords" content="services, lol, kek, cheburek"/>
    <meta name="description" content="services list"/>
@endsection
@section('css')
    <style>
        body {
            background: #439487;
        }
    </style>
@endsection

@section('content')
    <h1>Services list</h1>
    <ul>
    @foreach($services as $service)
        <li>
            <a href="{{ route('service', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
        </li>
    @endforeach
    </ul>
@endsection
@section('scripts')
    <script>
        console.log('I\'m called from services page')
    </script>
@endsection
