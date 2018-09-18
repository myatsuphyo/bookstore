@extends('templates.master')

@section('content')

    <h2>Read Data</h2>
    <hr/>
    <a class="btn btn-primary" href="{{ URL::to('books/create') }}" style="margin-bottom: 15px;">Create New</a>

    @if(Session::has('message'))
    <div class="alert-custom">
        <p>{!! Session('message') !!}</p>
    </div>
    @endif()

    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="padding-left: 15px;">#</th>
            <th>Name</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Price(Kyats)</th>
            <th width="110px;">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($books as $book)
            <tr>
                <td style="padding-left: 15px;">{!! $book->id !!}</td>
                <td>{!! $book->name !!}</td>
                <td>{!! $book->author !!}</td> 
                <td>{!! $book->genre !!}</td>
                <td>{!! $book->price !!}</td>
                <td>
                    <a class ="btn btn-success btn-sm" href="{{URL::to('books/'.$book->id.'/edit') }}">Edit</a>
                    {!! Form::open(['id'=>'deleteForm', 'method'=>'DELETE', 'url'=>'/books/'.$book->id]) !!}
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection()