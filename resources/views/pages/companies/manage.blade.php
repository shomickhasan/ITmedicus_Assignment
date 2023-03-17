@extends('template.master')
 <!-- section for dinamic title -->
@section('dinamic-title','Manege Companies')
@section('main-contant')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Manage Companies</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">manage companies</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="row">
        <div class="col-md-11 m-auto">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Condensed Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Logo</th>
                      <th>Website</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $sl =1 ;@endphp
                    @foreach ($companies as $companie )
                    <tr>
                        <td>{{$sl++}}</td>
                        <td>{{$companie->companie_name}}</td>
                        <td>{{$companie->companie_email}}</td>
                        <td>{{$companie->companie_logo}}</td>
                        <td>{{$companie->companie_website}}</td>
                        <td>Action</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{ $companies->links() }}
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
      </div>
@endsection
