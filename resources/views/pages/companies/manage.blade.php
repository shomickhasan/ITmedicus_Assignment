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
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Logo</th>
                      <th>Website</th>
                      <th style="width: 100px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $sl =1 ;@endphp
                    @foreach ($companies as $companie )
                    <tr>
                        <td>{{$sl++}}</td>
                        <td>{{$companie->companie_name}}</td>
                        <td>{{$companie->companie_email}}</td>
                        <td>
                            @if(isset($companie->companie_logo))
                            <img height="40" width="40" src="{{asset('images/'.$companie->companie_logo)}}" alt="company_logo">
                            @else
                            <span>logo dose not save</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{$companie->companie_website}}">{{$companie->companie_website}}</a>
                        </td>
                        <td>
                            <a href="{{Route('admin.companiesedit',$companie->companie_slug)}}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit text-light"></i>
                            </a>
                            <a id="delete" href="{{Route('admin.companiesdelete',$companie->id)}}" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash text-light"></i>
                            </a>
                        </td>
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
