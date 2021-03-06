@extends('layouts.app')

@section('js')
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row head">
        Trending in Tech
    </div>
    <div class="row">
    <?php $i=0; ?>
        @foreach ($posts as $post)
            @if($post['title']!='')
                <?php $i++; ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="row" id="postdetail">
                            <div class="col-xs-11" id="leftpost">
                                <span class="lefttriangle"></span>
                        <a href=post/{{ $post['id'] }}>
                                <div id="posttitle">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <!-- {{ $post['id'] }}. -->
                                   {{$i}}. 
                                   {{ $post['title'] }}
                                </div>
                        </a>
                            </div>
                            <div class="col-xs-1" id="righttriangle">
                        <a href=post/{{ $post['id'] }}>
                                <span class="righttriangle"></span>
                        </a>
                            </div>
                    </div>
                </div>
            @endif
        @endforeach
        @if($i==0)
            <!-- NO posts yet image -->
            No POSTS YET
        @endif
    </div>
</div>
@endsection
