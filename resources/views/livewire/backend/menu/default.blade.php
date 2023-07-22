@extends('apps.backapp')
@section('title', 'Main-Menu')
@section('pageTitle', 'Main-Menu')
@section('extraCss')
    @livewireStyles
@endsection
@section('main')
    <div class="container">
        <div class="card">
            <div class="card-header text-center text-uppercase">
                <h5>Main-Menu</h5>
            </div>
            <div class="card-body">
                @livewire('mainmenus')
            </div>
        </div>
    </div>
@endsection
@section('extraScripts')
    @livewireScripts
@endsection
