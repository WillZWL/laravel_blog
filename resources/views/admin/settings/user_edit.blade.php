@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit User:  {{ $user->username }}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-8">
                {!! Form::model($user,['method'=>'PATCH','url' => 'admin/users/'.$user->id]) !!}
                    <div class="form-group">
                        {!! Form::label('username', 'Name:') !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'autofocus' => 'autofocus']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::text(null, null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update User', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                    @section('header')
                        <link rel="stylesheet" href="/admin-assets/css/select2.min.css">
                    @endsection

                {!! Form::close() !!}
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        <!-- /.row (nested) -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@stop
