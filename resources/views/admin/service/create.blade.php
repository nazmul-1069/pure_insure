@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"> </div>
            <!-- left column -->
            <div class="col-md-10">
                @if(Session::has('success'))
                  <div class="alert alert-success message">
                      <ul>
                          <li>{{Session::get('success')}}</li>
                      </ul>
                  </div>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-success message">
                        <ul>
                          <li>{{$error}}</li>
                        </ul>
                      </div>
                    @endforeach
                @endif
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Service Add</h3>
                </div>

                <form action="{{route('service-add')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service Name</label>
                        <input type="text" name="service_name" class="form-control" autocomplete="off"  placeholder="Service name">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control input-group-text" id="inputGroupFile02">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="status" value="1" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Status</label>
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>

            </div>
            <div class="col-md-1"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
