<?php

namespace App\Http\Controllers;
use App\Models\Package;
use App\Models\PackageDetail;
use App\Models\PackageDetailList;
use Illuminate\Http\Request;

class PackageDetailController extends Controller
{
    public function index()
    {
        $PackageDetail = PackageDetail::with('package')->where('status',1)->get();
        return view('admin.packagedetail.index',compact('PackageDetail'));
    }

    public function create()
    {
        $packages = Package::where('status',1)->get();
        return view('admin.packagedetail.create',compact('packages'));
    }

    public function store(Request $request)
    {
        $package_detail = new PackageDetail();
        $package_detail->package_id = $request->package_id;
        $package_detail->package_details = $request->details;
        $package_detail->status = $request->status;
        $package_detail->save();
        $id = $package_detail->id;
        $package_detail_lists = $request->package_detail;

        foreach($package_detail_lists as $key => $value)
        {
            PackageDetailList::create([
                'package_detail_id' => $id,
                'package_id' => $request->package_id,
                'title' => $value['name'],
                'price' => $value['price']
            ]);
        }

        return redirect()->route('package-detail-list')->with('success','Package details add successfully.');
    }
}
