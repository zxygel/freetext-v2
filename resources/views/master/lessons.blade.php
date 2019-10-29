@extends('layouts.app')
@section('title')
Lessons
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lessons</div>

                <div class="card-body">
                	@if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span>{!! session('flash_message') !!}</div>
                    @endif
                	<button class="btn btn-sm btn-danger mb-3" onclick=window.location="{{route('lessons-form')}}">Add Lesson</button>
                	<p><strong>List of lessons</strong></p>
                	@if ($lessons->count() > 0)
                		<table class="table table-borderd">
                			<tbody>
		                    @foreach ($lessons as $lesson)
		                    	<tr>
		                    		<td>{{$lesson->title}}</td>
		                    		<td><a href="/lessons/view/{{$lesson->id}}">view</a> | <form method="post" class="form-inline" role = "form" action="{{route('lessons-delete')}}">@csrf <input type="hidden" name="id" value="{{$lesson->id}}"><button class="btn btn-danger btn-sm text-white">delete</button></form></td>
		                    	</tr>
		                    @endforeach
	                    	</tbody>
	                    </table>
	                    {{$lessons->links()}}
	                @else
	                <span class="text-muted">No data record found!</span>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
