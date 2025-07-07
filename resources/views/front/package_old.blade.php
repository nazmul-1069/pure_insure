@extends('front.master')

@section('content')
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="row">
                <?php
                    foreach($packages as $key => $package)
                    {
                ?>
                <div class="col-lg-4 col-md-6 box-shadow">
                    <div class="single-courses-box without-box-shadow mb-30">
                        <div class="courses-image">
                            <a href="#" class="d-block"><img src="{{asset('uploads/package/'.$package->image)}}" alt="image"></a>

                            <div style="text-align: center;background: #1689FE;margin-top: 17px;border-radius: 20px;padding: 10px;">
                                <a href="#" class="d-block" style="color:#fff;">{{$package->package_name;}}</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                   <ul>
                                    <li>Doctor Consultation followed by e-Prescription</li>
                                    <li>Cash Coverage of up to Taka 113,000</li>
                                    <li>Up to 40% discount on diagnostic test bills</li>
                                    <li>Duration: 1 year </li>
                                   <li>Price: Taka 86.12/month</li>
                                   </ul>
                                </div>
                            </div>
                        </div>

                        <div class="courses-box-footer" style="text-align: center;">
                            <a href="{{route('package-info',$package->id)}}">
                                <button class="btn btn-primary">View Details</button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->
@endsection



