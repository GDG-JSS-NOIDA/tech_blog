@extends('layouts.app')

@section('js')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        @if(\Auth::user()->admin==1)
            <span class="adminpanel" id="admin"></span>
        @else
            <div id="active">
                <a href="home/editor" class="btn">
                    <img class="image" src="{{asset('img/eventstart.png')}}">
                </a>
            </div>
            <div id="inactive">
                <a class="btn">
                    <img class="image" src="{{asset('img/waiting.png')}}">
                </a>
            </div>
        @endif
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('js/home.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user.js')}}"></script>
@endsection