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
              <li class="breadcrumb-item active">Package List</li>
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

            <!-- left column -->
            <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Package List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <div class="col-md-1">
                    <a href="{{route('packages-create')}}">
                      <button type="button" class="btn btn-block btn-primary btn-sm">Add</button>
                    </a>
                  </div>
                  <thead>
                    <tr>
                        <th>Si</td>
                        <th>Service</th>
                        <th>Subscription Cycle</th>
                        <th>Person</th>
                        <th>Package Name</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach($packages as $key => $value)
                    {
                  ?>
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->service->service_name}}</td>
                        <td>
                            <?php
                                if($value->subscription_id == 1)
                                {
                            ?>
                            Daily
                            <?php
                                }
                                elseif($value->subscription_id == 2)
                                {
                            ?>
                            Weekly
                            <?php
                                }
                            ?>
                        </td>
                        <td>{{$value->person}}</td>
                        <td>{{$value->package_name}}</td>
                        <td>{{$value->duration}}</td>
                        <td>{{$value->price}}</td>
                        <td><img src="{{asset('uploads/package/'.$value->image)}}" style="width: 50px;height:50px;"></td>
                        <td>{{strip_tags($value->details)}}</td>
                        <td>
                            <?php
                            if($value->status == 1)
                            {
                            ?>
                            <small class="badge badge-success">Active</small>
                            <?php
                            }
                            else
                            {
                            ?>
                            <small class="badge badge-danger">Inactive</small>
                            <?php
                            }
                            ?>

                        </td>

                        <td class="tools">
                            <a href="{{route('packages-edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                            <a href="#" data-toggle="modal" data-target="#modal-md"><i class="fas fa-trash" data-servive_id="<?php echo $value->id;?>"></i></a>
                        </td>

                    </tr>
                  <?php
                    }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
@push('custom-scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script>
    //@if(Session::has('success'))
    toastr.success('dddd');
    //@endif
</script>
@endpush
