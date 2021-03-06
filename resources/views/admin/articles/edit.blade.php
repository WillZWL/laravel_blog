@extends('admin.layout')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Edit Articles:{{ $article->title }}</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-8">
				{!! Form::model($article,['method'=>'PATCH','url' => 'admin/articles/'.$article->id, 'files'=>true]) !!}
					@include('admin.articles.form',['submitButtonText'=>'Update Article', 'form_date'=>$article->created_at->format('Y-m-d')])
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
