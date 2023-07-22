@extends('apps.backapp')
@section('title', 'Page-Connections')
@section('pageTitle', 'Page-Connections')
@section('extraCss')
    @livewireStyles
@endsection
@section('main')
    <div class="container">
        <div class="card">
            <div class="card-header text-center text-uppercase">
                <h5>Page-Connections</h5>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @livewire('routes')
            </div>
        </div>
    </div>
@endsection
@section('extraScripts')
    @livewireScripts
@endsection
