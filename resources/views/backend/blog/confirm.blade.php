@extends('layouts.backend')

@section('title','Delete'.$post->title)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.blog.destroy', $post->id]]) !!}
    <div class="alert alert-danger">
        <strong>Warning!</strong> Are you Sure?
    </div>

    {!! Form::submit('Yes, delete', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('backend.blog.index') }}" class="btn btn-success">
        <strong>No</strong>
    </a>
    {!! Form::close() !!}
@endsection