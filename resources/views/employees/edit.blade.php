@extends('layouts.master')

@section('title')
{{ __('Edit Employee') }}
@endsection

@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('Edit Employee') }}</h6>
         </div>
         <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
               {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('employees.update',$employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <strong>First Name:</strong>
                    <input type="text" name="first_name" value="{{ $employee->first_name }}" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <input type="text" name="last_name" value="{{ $employee->last_name }}" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                        <strong>Position:</strong>
                        <select class="form-control" name="position">
                            <option value="Web Developer">Web Developer</option>
                            <option value="Web Designer">Web Designer</option>
                        </select>
                </div>
               <button type="submit" class="btn btn-primary">Save</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection