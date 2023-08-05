@extends('layouts.master')

@section('title')
{{ __('All employees') }}
@endsection

@section('content')
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
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <div class="row">
         <div class="col-8">
            <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('All Employees') }}</h6>
         </div>
         <div class="col-4">
            @can('role-create')
               <a href="{{ route('employees.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> {{ __('Add Employee') }}</a>
            @endcan
         </div>
      </div>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>{{ __('First Name') }}</th>
                  <th>{{ __('Last Name') }}</th>
                  <th>{{ __('Position') }}</th>
                  <th>{{ __('Create Date') }}</th>
                  <th class="text-center">{{ __('Actions') }}</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($employees as $employee)
               @can('web-developer') <!-- Check if the user has the role 'Web Developer' -->
               @if ($employee->position === 'Web Developer')
               <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $employee->first_name }}</td>
                  <td>{{ $employee->last_name }}</td>
                  <td>{{ $employee->position }}</td>
                  <td>{{ $employee->created_at }}</td>
                  <td>
                     <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">Show</a>
                        @can('employee-edit')
                        <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('employee-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                     </form>
                  </td>
               </tr>
               @endcan
               @endif
               @can('web-designer')
               @if ($employee->position === 'Web Designer')
               <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $employee->first_name }}</td>
                  <td>{{ $employee->last_name }}</td>
                  <td>{{ $employee->position }}</td>
                  <td>{{ $employee->created_at }}</td>
                  <td>
                     <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">Show</a>
                        @can('employee-edit')
                        <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('employee-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                     </form>
                  </td>
               </tr>
               @endif
               @endcan
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection
