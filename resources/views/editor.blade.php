@extends('layouts.app')

@section('js')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/editor.css')}}">
@endsection

@section('content')

	<div id="active">
		<div class="container">
			<form action="update" method="post">
				<div class="row title">
					<label class="title">Title</label>&nbsp;
					<input type="text" class="title" value="{{ $data['title']  }}" name="title" required="" />
				</div>
				<div class="row">
					<textarea class="ckeditor" value="{{ $data['content']  }}" name="content" required="" />{{ $data['content']  }}</textarea>
				</div>
				{{ csrf_field() }}
				<div class="row submit">
					<input type="submit" name="submit" class="btn" value="PUBLISH"/>
				</div>
			</form>
		</div>
	</div>
	<div id="inactive">
		<!-- ADD the event over image -->
		THE EVENT IS OVER
	</div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('js/editor.js')}}"></script>
@endsection