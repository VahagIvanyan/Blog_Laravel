@extends('main')

@section('title', '| View Post')

@section('content')
<!--style type="text/css"> p { opacity: 0.5; }</style-->
<div class="row">
	<div class="col-md-8">
	<h1>{{ $post->title }}</h1>
	<p class="lead">{{ $post->body}}</p>
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
				<dd> {{ date( 'M j, Y h:ia', strtotime($post->created_at)) }} </dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd> {{ date( 'M j, Y h:ia', strtotime($post->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit','Edit', [$post->id], ['class' => 'btn btn-primary btn-block'])!!}
				</div>
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.destroy','Delete', [$post->id], ['class' => 'btn btn-danger btn-block'])!!}
				</div>
			</div>
		</div> 
	</div>
</div>
	
@endsection