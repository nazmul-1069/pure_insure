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
              <li class="breadcrumb-item active">Package Create</li>
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
                    <h3 class="card-title">Package Add</h3>
                </div>

                <form action="{{route('packages-add')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Service</label>
                                <select class="form-control" id="service_id" name="service_id">
                                    <option value="">Please Select</option>
                                    <?php
                                        foreach($services as $key => $value)
                                       {
                                    ?>
                                        <option value="<?php echo $value->id;?>">{{$value->service_name}}</option>
                                    <?php
                                    }
                                    ?>

                                </select>
                                @if($errors->has('service_id'))
                                    <span style="color:	#FF0000">{{ $errors->first('service_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Subscription Cycle</label>
                                <select class="form-control" id="subscription_id" name="subscription_id">
                                    <option value="">Please Select</option>
                                    <?php
                                        foreach($subscriptions as $key => $value)
                                       {
                                    ?>
                                        <option value="<?php echo $value->id;?>">{{$value->cycle_name}}</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                @if($errors->has('subscription_id'))
                                    <span style="color:	#FF0000">{{ $errors->first('subscription_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Person</label>
                                <input type="number" name="person" class="form-control" placeholder="Person">
                                @if($errors->has('person'))
                                    <span style="color:	#FF0000">{{ $errors->first('person') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Package Name</label>
                                <input type="text" name="package_name" class="form-control" placeholder="Package Name">
                                @if($errors->has('package_name'))
                                    <span style="color:	#FF0000">{{ $errors->first('package_name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Duration</label>
                                <input type="text" id="price" name="duration" class="form-control" placeholder="Duration">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" id="price" name="price" class="form-control" placeholder="Price">
                                @if($errors->has('price'))
                                    <span style="color:	#FF0000">{{ $errors->first('price') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control input-group-text" id="inputGroupFile02">
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
