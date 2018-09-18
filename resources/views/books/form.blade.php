@extends('templates.master')

@section('content')

    <h2>Information of a book</h2>
    <hr/>
    <a class="btn btn-primary" href="/books" style="margin-bottom: 15px;">Read Data</a>

    {!! Form::open(['id' => 'dataForm', 'url' => '/books']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', null, ['placeholder' => 'Enter name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('author', 'Author') !!}
        {!! Form::email('author', null, ['placeholder' => 'Enter email', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('fb', 'Facebook'); !!}
        {!! Form::url('fb', null, ['placeholder' => 'Enter facebook url', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('mobile', 'Mobile'); !!}
        {!! Form::text('mobile', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()