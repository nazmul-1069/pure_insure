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
              <li class="breadcrumb-item active">Package Detail Create</li>
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
            <div class="col-md-12">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Package Detail Add</h3>
                </div>

                <form action="{{route('package-detail-add')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Package</label>
                                <select class="form-control" id="package_id" name="package_id">
                                    <option value="0">Please Select</option>
                                    <?php
                                       foreach($packages as $key => $value)
                                       {
                                    ?>
                                        <option value="<?php echo $value->id;?>">{{$value->package_name}}</option>
                                    <?php
                                        }
                                    ?>

                                </select>

                            </div>

                            <div class="form-group">
                            <table class="table table-bordered" id="dynamicTable">

                                <tr>

                                    <th>Name</th>

                                    <th>Price</th>

                                    <th>Action</th>

                                </tr>

                                <tr>

                                    <td><input type="text" name="package_detail[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                                    <td><input type="text" name="package_detail[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>

                                </tr>

                            </table>
                            </div>

                            <div class="form-group">
                                <label>Detail</label>
                                <textarea name="details" class="form-control"></textarea>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" name="status" value="1" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Status</label>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
            <div class="col-md-1"> </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@push('custom-scripts')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    var i = 0;

    $("#add").click(function(){
        ++i;
        $("#dynamicTable").append('<tr><td><input type="text" name="package_detail['+i+'][name]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="package_detail['+i+'][price]" placeholder="Enter your Price" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');

    });

    $(document).on('click', '.remove-tr', function(){

         $(this).parents('tr').remove();

    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor',{
        filebrowserBrowseUrl: '/browser/browse.php',
    });
</script>

<script>
    CKEDITOR.replace('details',{
        filebrowserBrowseUrl: '/browser/browse.php',
    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>

@endpush
