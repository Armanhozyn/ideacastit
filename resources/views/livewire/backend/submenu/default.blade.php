@extends('apps.backapp')
@section('title', 'Sub-Menus')
@section('pageTitle', 'Sub-Menus')
@section('extraCss')
    @livewireStyles
@endsection
@section('main')
    <div class="container">
        <div class="card">
            <div class="card-header text-center text-uppercase">
                <h5>Sub-Menus</h5>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @livewire('submenus')
            </div>
        </div>
    </div>
@endsection
@section('extraScripts')
    @livewireScripts
@endsection
