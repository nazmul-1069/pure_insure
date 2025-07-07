@extends('front.master')

@section('content')    
    <section class="contact-area pb-10" style="margin-top:43px;">
            <div class="container">
                <div class="contact-form1" style="border: 1px solid #E6E9FC;border-radius: 4px;margin-bottom: 13px;padding: 25px;">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="section-title1" style="margin-bottom:3px;margin-top:-3px;">
                                    <h2 style="color: #1689FE;text-align:left;font-size: 22px;margin-bottom: 14px;">Provides the following information for self</h2>
                                </div>
                                
                                 <div class="form-group">
                                    <input type="text" name="app_full_name" id="app_full_name" class="form-control" required data-error="Full Name (as per NID/Passport/Birth Certificate)" placeholder="Full Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="number" name="mobile" id="mobile" class="form-control" required data-error="Please enter mobile number" placeholder="Enter mobile number">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                               
                            
                                <div class="form-group">
                                    <!--<input type="date" name="birth_date" id="birth_date" required data-error="Date of birth" class="form-control" placeholder="MM-DD-YYYY">-->
                                    <input name="birth_date" id="birth_date" required data-error="Date of birth" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" placeholder="Enter birth date" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            
                                <div class="form-group">
                                    <input type="number" name="nid" id="nid" class="form-control" placeholder="NID">
                                </div>
                                
                                
                                
                                <select id="division" name="division" required="required">
                                    <option value="-1">-- Select Division --</option>
                                    <?php 
                                        foreach($divisions as $k => $value)
                                        {
                                    ?>
                                    <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                                
                                <br>
                                
                                
                                <!--<select id="district1" name="district1" required="required">-->
                                <!--    <option value="-1">-- Select District --</option>-->
                                <!--</select>-->
                                <div id="district1"></div>
                               
                               
                                <br>
                                    
                                <div class="form-group">
                                    <textarea name="address" class="form-control" id="address" cols="30" rows="5" required data-error="Write your address" placeholder="Address"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="select-box">
                                    <select id="gender" name="gender" required="required">
                                        <option value="-1">-- Select Gender --</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <br>
                                
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" id="password"  required data-error="Please Enter password" class="form-control" placeholder="Enter Password">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" id="password_confirm" required data-error="Please Enter confirm password" class="form-control" placeholder="Confirm Password">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="col-lg-6 col-md-12">
                                
                                <div class="section-title1" style="margin-bottom:3px;margin-top:-3px;">
                                    <h2 style="color: #1689FE;text-align:left;font-size: 22px;margin-bottom: 14px;">Provides the following information of nominee</h2>
                                </div>
                    
                                <div class="form-group">
                                    <input type="text" name="nominee_name" id="nominee_name" class="form-control" required data-error="Place enter name of nominee" placeholder="Enter name of nominee">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group">
                                   
                                    <input type="number" name="nominee_age" id="nominee_age" class="form-control" required data-error="Place enter age of nominee" placeholder="Enter age of nominee">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group">
                                    
                                    <div class="select-box">
                                        <select id="relationship_with_nominee" name="relationship_with_nominee" required="required">
                                            <option value="-1">-- Select Relationship with nominee --</option>
                                            <option value="1">Father</option>
                                            <option value="2">Mother</option>
                                            <option value="3">Husband</option>
                                            <option value="4">Wife</option>
                                            <option value="5">Son</option>
                                            <option value="6">Daughter</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    
                                    <input type="number" name="nominee_mobile" id="nominee_mobile" class="form-control" autocomplete="off" placeholder="Enter mobile number of nominee">
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label>Select Payment Method</label><br>
                                    <input type="checkbox" checked name="payment"><span style="margin-left: 10px;margin-right: 20px;">Bkash</span>
                                    <img src="{{asset('/laravel_project/public/front/image/logo/bkash.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div calss="row">
                            <div  class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div  class="col-lg-12 col-md-12">
                                <div class="alert alert-success alert-dismissible message-success" id="click_hide" style="padding-right:0px;display:none;">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <ul>
                                        <li style="list-style:none;">Your request has been successfully submitted.Our team will review your application and get in touch with you shortly to complete the process.</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            <div id="particles-js-circle-bubble-3"></div>
            <div class="contact-bg-image"><img src="{{asset('laravel_project/public/front/assets/img/map.png')}}" alt="image"></div>
    </section>
@endsection

@push('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#division').change(function() {
                var division_id = $(this).val();
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                
                $.ajax({
                    url:"{{route('getDistrictByDivision')}}",
                    method:'POST',
                    data:{division_id:division_id,_token: "{{ csrf_token() }}" },
                    success:function(response)
                    {
                        $("#district1").html(response).show();
                    }
                });
  
            });
            
            $("#click_hide").click(function(){
                $(this).hide();
            });
            
            
            $("#contactForm").submit(function(e){
                e.preventDefault();
                //var formData = new FormData();
                var mobile = $("#mobile").val();
                var app_full_name = $("#app_full_name").val();
                var birth_date = $("#birth_date").val();
                var nid = $("#nid").val();
                var division = $("#division").val();
                var district_id = $("#district_id").val();
                var address = $("#address").val();
                var gender = $("#gender").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var password_confirm = $("#password_confirm").val();
                var nominee_name = $("#nominee_name").val();
                var nominee_age = $("#nominee_age").val();
                var relationship_with_nominee = $("#relationship_with_nominee").val();
                var nominee_mobile = $("#nominee_mobile").val();
                
                $.ajax({
                    url:"{{route('userRegistration')}}",
                    method:"POST",
                    data:{
                        mobile:mobile,
                        app_full_name:app_full_name,
                        birth_date:birth_date,
                        nid:nid,
                        division:division,
                        district_id:district_id,
                        address:address,
                        gender:gender,
                        email:email,
                        password:password,
                        password_confirm:password_confirm,
                        nominee_name:nominee_name,
                        relationship_with_nominee:relationship_with_nominee,
                        nominee_mobile:nominee_mobile,
                        _token: "{{ csrf_token() }}"
                    },
                    success:function(response)
                    {
                       if(response)
                       {
                          $(".message-success").show();
                            setTimeout(function(){
                                $(".message-success").fadeOut();
                            },8000);
                       }
                    }
                })
                
            });
        });
    </script>
@endpush



