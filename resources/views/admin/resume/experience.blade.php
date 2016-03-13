@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Experience

        <a href="add_experience"><button type="button" class="btn btn-success btn-sm iframe cboxElement"><span class="glyphicon glyphicon-pencil"></span>Add Experience</button></a>
        </h1>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($experiences as $experience)
                    <tr>
                        <td>{{ $experience->id }}</td>
                        <td>{{ $experience->name }}</td>
                        <td>{{ $experience->date }}</td>
                        <td>{{ $experience->description }}</td>
                        <td>{{ $experience->created_at }}</td>
                        <td>
                            {!! Form::open(['method' => 'get', 'url' => 'admin/resume/experience'.$experience->id.'/edit', 'style' => 'float:left;margin-right: 10px;']) !!}
                                <button type="submit" class="btn btn-success btn-sm iframe cboxElement"><span class="glyphicon glyphicon-pencil"></span> Edite</button>
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'delete', 'url' => 'admin/resume/experience'.$experience->id, 'style' => 'float:left;margin-right: 10px;']) !!}
                                <button type="submit" class="btn btn-sm btn-danger iframe cboxElement"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">
                    每页{{ $experiences->count() }}条,共{{ $experiences->lastPage() }}页,总{{ $experiences->total() }}条.
                </div>
            </div>
            <div class="col-sm-6">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                    {!! $experiences->render() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection
