@extends('front.master')

@section('content')
<div class="page-title-area page-title-style-three item-bg4 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            {{-- <ul>
                <li><a href="index.html">Home</a></li>
                <li>Category</li>
            </ul> --}}
            <h2 style="text-align: center;">PURE INSURE HEALTH</h2>
        </div>
    </div>
</div>
<section class="pricing-area ptb-100">
    <div class="container">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="4" class="review-stars">
                            <span style="color:#000;">Package Title: <?php echo $package->package_name?$package->package_name:'';?> / <?php echo $package->subscription->cycle_name?$package->subscription->cycle_name:''?></span>
                            @if($package)
                            {!!$package->details!!}
                            @endif
                        </th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                        //foreach($package_details as $value)
                       // {
                    ?>
                    <tr>
                        <td><img src="{{asset('uploads/icon/patient.png')}}" alt="image"></td>
                        <td style="text-align:left;">Hospital Cashback</td>
                        <td>Taka 20,000 <br> BDT 1,000 per day</td>
                    </tr>
                    <tr>
                        <td><img src="{{asset('uploads/icon/patient.png')}}" alt="image"></td>
                        <td style="text-align:left;">Hospital Cashback</td>
                        <td>Taka 20,000 <br> BDT 1,000 per day</td>
                    </tr>
                    <tr>
                        <td><img src="{{asset('uploads/icon/patient.png')}}" alt="image"></td>
                        <td style="text-align:left;">Hospital Cashback</td>
                        <td>Taka 20,000 <br> BDT 1,000 per day</td>
                    </tr>
                    <?php
                      //  }
                    ?>
                    <tr>
                        <td colspan="3" style="text-align: center;"><a href="{{route('checkout')}}"><button class="btn btn-warning">Buy Now</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12">
                <?php
                    if(!empty($package_details))
                    {
                ?>
                {!!$package_details->package_details!!}
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>

@endsection
