<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
class ServiceController extends Controller
{

    public function index()
    {
        $services = service::get();

        return view('admin.service.index',compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'service_name' => 'required|unique:services'
        ]);

        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator->errors());
        }
        else
        {

            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $filePath = public_path('/uploads/service');
            $image->move($filePath, $file_name);
            $full_path = $filePath.'/'.$file_name;
            $img = ImageManager::imagick()->read($full_path);
            $img->resize(600, 485);
            $val = $img->toJpeg(72)->save(public_path("/uploads/service/{$file_name}"));
            service::create([
                'service_name' => $request->service_name,
                'image' => $file_name,
                'status' => $request->status
            ]);

            return redirect()->route('service-list')->with('success','Service add successfully');
        }

    }

    public function edit(Request $request,$id)
    {
        $service = service::where('id',$id)->first();
        return view('admin.service.edit',compact('service'));
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'service_name' => 'required'
        ]);

        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator->errors());
        }
        else
        {
            $image = $request->file('image');
            
            if($image)
            {
                $file_name = time().'.'.$image->getClientOriginalExtension();
                $filePath = public_path('/uploads/service');
                $image->move($filePath, $file_name);
                $full_path = $filePath.'/'.$file_name;
                $img = ImageManager::imagick()->read($full_path);
                $img->resize(600,485);
                $img->toJpeg(72)->save(public_path("/uploads/service/{$file_name}"));

                $image_link = DB::table('services')->where('id',$id)->first();
                $image_unlink = public_path('/uploads/service/'.$image_link->image);
                unlink($image_unlink);

                DB::table('services')->where('id',$id)->update([
                    'image' => $file_name
                ]);
            }


            $service = array(
                'service_name' => $request->service_name,
                'status' => $request->status?$request->status:0
            );
            service::where('id',$id)->update($service);
            return redirect()->route('service-list')->with('success','Service update successfully');
        }
    }

    public function delete(Request $request)
    {
        $id = $request->service_id;
        $image_link = DB::table('services')->where('id',$id)->first();
        $image_unlink = public_path('/uploads/service/'.$image_link->image);
        unlink($image_unlink);
        service::where('id',$id)->delete();
        return redirect()->route('service-list')->with('success','Service deleted successfully');
    }
}
