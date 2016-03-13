@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Experience</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-8">
                {!! Form::open(['url' => 'admin/resume/store_experience']) !!}
                    @include('admin.resume.experience_form',['submitButtonText'=>'Add Experience'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
