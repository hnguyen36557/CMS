@extends('layouts.backend')

@section('title','Delete'.$user->name)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.users.destroy', $user->id]]) !!}
    <div class="alert alert-danger">
        <strong>Warning!</strong> Are you Sure?
    </div>

    {!! Form::submit('Yes, delete', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('backend.users.index') }}" class="btn btn-success">
        <strong>No</strong>
    </a>
     {!! Form::close() !!}
@endsection