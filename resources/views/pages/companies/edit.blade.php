@extends('template.master')
 <!-- section for dinamic title -->
@section('dinamic-title','edit Companie ')
@section('main-contant')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">EditCompanie</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Companie</li>
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
          <h3 class="card-title">Edit Companie</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{Route('admin.companiesupdate',$compaine->id)}}"  enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="companyName">Companie Name</label>
              <input type="text" class="form-control" id="CompanieName" placeholder="Enter Companie Name" name=companieName value="{{$compaine->companie_name}}" />
            </div>
            @error('companieName')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
              <label for="CompanieEmail">Companie Email</label>
              <input type="email" class="form-control" id="CompanieEmail" placeholder="Enter Companie Email" name="companieEmail" value="{{$compaine->companie_email}}"/>
            </div>
            @error('companieEmail')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <picture>
                <img height="80" width="80" src="{{asset('images/'.$compaine->companie_logo)}}" class="img-fluid img-thumbnail" alt="...">
            </picture>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="companieLogo">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
            @error('companieLogo')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
                <label for="CompanieWebsite">Companie Website</label>
                <input type="text" class="form-control" id="CompanieWebsite" placeholder="Enter Companie Website" name="companieWebsite" value="{{$compaine->companie_website}}">
            </div>
            @error('companieWebsite')
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
