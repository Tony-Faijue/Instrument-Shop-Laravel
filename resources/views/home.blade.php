@extends('layouts.layout')

@section('header')
    <x-nav />
@endsection

@section('content')
    <!--Use of flex tag to center the grid items -->
    <div class="flex items-center justify-center min-h-screen mt-6 ml-6 mr-6 mb-6">
        <x-home-content />
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection