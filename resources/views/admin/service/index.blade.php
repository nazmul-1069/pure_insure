@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                <h3 class="card-title">Service List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <div class="col-md-1">
                    <a href="{{route('service-create')}}">
                      <button type="button" class="btn btn-block btn-primary btn-sm">Add</button>
                    </a>
                  </div>
              
                  <thead>
                    <tr>
                      <th>Si</td>
                      <th>Service Name</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach($services as $key => $value)
                    {
                  ?>
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->service_name}}</td>
                        <td><img src="{{asset('uploads/service/'.$value->image)}}" style="width: 50px;height:50px;"></td>
                        <td>
                            <?php
                            if($value->status)
                            {
                            ?>
                            <small class="badge badge-success">Active</small>
                            <?php
                            }else{
                                ?>
                            <small class="badge badge-danger">Inactive</small>
                            <?php
                            }
                            ?>
                        </td>
                        <td class="tools">
                            <a href="{{route('service-edit',$value->id)}}"><i class="fas fa-edit"></i></a>
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

      <div class="modal fade" id="modal-md">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Service</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{route("delete-service")}}">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="service_id" id="delete_id">
                    <p>Are you sure you want to delete this service&hellip;</p>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
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
  @if (Session::has('success'))
      <script>

        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.success("{{ Session::get('success')}}");
      </script>
  @endif
  <script type="text/javascript">
    $(document).ready(function(){
        $(".fa-trash").click(function(){
            var service_id = $(this).data('servive_id');
            $("#delete_id").val(service_id);
        })
    })
  </script>
@endpush
