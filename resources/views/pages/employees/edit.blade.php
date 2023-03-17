@extends('template.master')
 <!-- section for dinamic title -->
@section('dinamic-title','edit Companie ')
@section('main-contant')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit New Employee</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit employee</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <div class="row">
        <div class="col-md-8 m-0 m-auto">
                <!-- /.content-header -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Employee</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{Route('admin.updateemploye',$empolye->id)}}" method="post">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="employeeName">Employee Name</label>
              <input type="text" class="form-control" id="employeeName" placeholder="Enter Employee Name" name=employeeName value="{{$empolye->employee_name}}" />
            </div>
            @error('employeeName')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
                <label>Companiee Name</label>
                <select class="form-control select2"  style="width: 100%;" name="companyName">
                    @foreach ( $companies as $companie)
                    <option value="{{$companie->id}}" @if($empolye->company_id==$companie->id) selected @endif>{{$companie->companie_name}}</option>
                    @endforeach
                </select>
            </div>
            @error('companyName')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
              <label for="employeeEmail">Employee Email</label>
              <input type="email" class="form-control" id="employeeEmail" placeholder="Enter Employee Email" name="employeeEmail" value="{{$empolye->employee_email}}">
            </div>
            @error('employeeEmail')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
                <label for="employeePhone">Employee Phone</label>
                <input type="text" class="form-control" id="employeePhone" placeholder="Enter Employee Phone Number" name="employeePhone" value="{{$empolye->employee_phone}}">
            </div>
            @error('employeePhone')
            <span class="text-danger">{{$message}}</span>
            @enderror
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
        </div>
      </div>
@endsection
