<?php
namespace App\Http\Controllers;
use App\Models\Package;
use App\Models\service;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::with('service')->get();
        return view('admin.package.index',compact('packages'));
    }

    public function create(Request $request)
    {
        $services = service::where('status',1)->get();
        $subscriptions = Subscription::where('status',1)->get();
        return view('admin.package.create',compact('services','subscriptions'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'service_id' => 'required',
            'subscription_id' => 'required',
            'person' => 'required',
            'package_name' => 'required|unique:packages',
            'price' => 'required'

        ]);

        if($validator->fails())
        {
            return redirect::back()->withErrors($validator->errors());
        }
        else
        {
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $filePath = public_path('/uploads/package');
            $image->move($filePath, $file_name);
            $full_path = $filePath.'/'.$file_name;
            $img = ImageManager::imagick()->read($full_path);
            $img->resize(600, 485);
            $val = $img->toJpeg(72)->save(public_path("/uploads/package/{$file_name}"));
            Package::create([
                'service_id' => $request->service_id,
                'subscription_id' => $request->subscription_id,
                'person' => $request->person,
                'package_name' => $request->package_name,
                'details' => $request->details,
                'duration' => $request->duration,
                'price' => $request->price,
                'image' => $file_name,
                'status' => $request->status
            ]);

            return redirect()->route('packages-list')->with('success','Package add successfully');
        }
    }

    public function edit(Request $request,$id)
    {
        $services = service::where('status',1)->get();
        $subscriptions = Subscription::where('status',1)->get();
        $package = Package::where('id',$id)->first();
        return view('admin.package.edit',compact('services','subscriptions','package'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required',
            'subscription_id' => 'required',
            'person' => 'required',
            'package_name' => 'required|unique:packages',
            'price' => 'required'
        ]);

        if($validator->fails())
        {
            return redirect::back()->withErrors($validator->errors());
        }
        else
        {
            $update_id = $request->input('package_update');
            $image = $request->file('image');
            
            if($image)
            {
                $file_name = time().'.'.$image->getClientOriginalExtension();
                $filePath = public_path('/uploads/package');
                $image->move($filePath, $file_name);
                $full_path = $filePath.'/'.$file_name;
                $img = ImageManager::imagick()->read($full_path);
                $img->resize(600, 485);
                $img->toJpeg(72)->save(public_path("/uploads/package/{$file_name}"));

                $image_link = DB::table('packages')->where('id',$update_id)->first();
                $image_unlink = public_path('/uploads/package/'.$image_link->image);
                unlink($image_unlink);

                DB::table('packages')->where('id',$update_id)->update([
                    'image' => $file_name
                ]);
            }

            Package::where('id',$update_id)->update([
                'service_id' => $request->service_id,
                'subscription_id' => $request->subscription_id,
                'person' => $request->person,
                'package_name' => $request->package_name,
                'details' => $request->details,
                'duration' => $request->duration,
                'price' => $request->price,
                'status' => $request->status
            ]);

            return redirect()->route('packages-list')->with('success','Package update successfully');
        }
    }



    // public function getSubCategoryByCategory(Request $request)
    // {
    //     $category_id = $request->category_id;
    //     $subcategory = Subcategory::where('categories_id',$category_id)->get();
    //     $options = '';
    //     foreach($subcategory as $key => $value)
    //     {
    //         $options .= "<option value=".$value->id.">".$value->subcategory_name."</option>";
    //     }
    //     echo $options;
    // }
}
