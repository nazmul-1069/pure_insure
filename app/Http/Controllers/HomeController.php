<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\Package;
use App\Models\PackageDetail;
use App\Models\PackageDetailList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        
         $services = service::where('status',1)->orderBy('id','ASC')->get();
         return view('front.home',compact('services'));

    }

    public function packageList($id)
    {
        $packages = Package::where('service_id',$id)->get();
        $total = count($packages);
        return view('front.package',compact('packages','total'));
    }

    public function packageDetails($id)
    {
        $package_details = PackageDetail::where(['package_id'=>$id,'status'=>1])->first();
        $package = Package::with('subscription')->where('id',$id)->first();
        $package_detail_lists = PackageDetailList::where('package_id',$id)->get();
        return view('front.package-details',compact('package_details','package','package_detail_lists'));
    }
    
    public function checkout()
    {
        $divisions = DB::table('divisions')->where('status',1)->get();
        return view('front.checkout',compact('divisions'));
    }
    
    public function contact()
    {
        return view('front.contact');
    }
    
    
    public function getDistrict(Request $request)
    {
        $districts = DB::table('districts')->where('division_id',$request->division_id)->get();
        
        $select = "<select class='nice-select custom_width' id='district_id'>";
        foreach($districts as $k => $value)
        {
           $select .= '<option>'.$value->district_name.'</option>'; 
        }
         $select .= "</select>";
        echo $select;
    }
    
    public function registerUser(Request $request)
    {
      echo true;
    }

}
