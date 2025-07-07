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
              <li class="breadcrumb-item active">Subscription Create</li>
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

                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Subscription Cycle Add</h3>
                </div>

                <form action="{{route('subscription-cycle-add')}}" method="post">
                  @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Subscription Cycle Name</label>
                            <input type="text" name="cycle_name" class="form-control"  placeholder="Subscription Cycle Name">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <span style="color:	#FF0000">{{$error}}</span>
                                @endforeach
                            @endif
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
