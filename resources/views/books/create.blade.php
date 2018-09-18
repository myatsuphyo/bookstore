@extends('templates.master')

@section('content')

    <h2>Information of a book</h2>
    <hr/>
    <a class="btn btn-primary" href="/books/create" style="margin-bottom: 15px;">Read Data</a>

    {!! Form::open(['id' => 'dataForm', 'route' => 'books.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', null, ['placeholder' => 'Enter name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('author', 'Author') !!}
        {!! Form::text('author', null, ['placeholder' => 'Enter author', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">    
        {!! Form::label('genre', 'Genre'); !!}
        {!! Form::text('genre', null, ['placeholder' => 'Enter genre', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price'); !!}
        {!! Form::text('price', null, ['placeholder' => 'Enter price', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()