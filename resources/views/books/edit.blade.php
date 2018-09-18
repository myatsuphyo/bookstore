@extends('templates.master')

@section('content')

    <h2>Information of a book</h2>
    <hr/>
    <a class="btn btn-primary" href="/books/create" style="margin-bottom: 15px;">Read Data</a>

    {!! Form::open(['id' => 'dataForm', 'route' => 'books.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', $book->name, ['placeholder' => 'Enter name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('author', 'Author') !!}
        {!! Form::text('author', $book->author, ['placeholder' => 'Enter author', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">    
        {!! Form::label('genre', 'Genre'); !!}
        {!! Form::text('genre', $book->genre, ['placeholder' => 'Enter genre', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price'); !!}
        {!! Form::text('price', $book->price, ['placeholder' => 'Enter price', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()