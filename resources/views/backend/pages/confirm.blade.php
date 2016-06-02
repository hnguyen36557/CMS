@extends('layouts.backend')

@section('title','Delete'.$page->title)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.pages.destroy', $page->id]]) !!}
    <div class="alert alert-danger">
        <strong>Warning!</strong> Are you Sure?
    </div>

    {!! Form::submit('Yes, delete', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('backend.pages.index') }}" class="btn btn-success">
        <strong>No</strong>
    </a>
    {!! Form::close() !!}
@endsection