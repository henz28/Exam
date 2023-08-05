@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <h2>Create New Role</h2>
    </div>
    <div class="col-lg-6 text-right">
        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <strong>Permission:</strong>
        <br/>
        <div class="checkbox-container">
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            @endforeach
        </div>
    </div>
</div>
</div>
<div class="row" style="margin-top:10%;">
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
@endsection
