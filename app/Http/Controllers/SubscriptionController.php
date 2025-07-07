<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::get();

        return view('admin.subscription.index',compact('subscriptions'));
    }

    public function create()
    {
        return view('admin.subscription.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'cycle_name' => 'required|unique:subscriptions'
        ]);

        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator->errors());
        }
        else
        {
            Subscription::create($request->all());
            return redirect()->route('subscription-cycle-list')->with('success','Subscription add successfully');
        }
    }

    public function edit(Request $request,$id)
    {
        $subscription = Subscription::where('id',$id)->first();
        return view('admin.subscription.edit',compact('subscription'));
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'cycle_name' => 'required',
        ]);

        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator->errors());
        }
        else
        {
            $update = array(
                'cycle_name' => $request->cycle_name,
                'status' => $request->status?$request->status:0
            );
            Subscription::where('id',$id)->update($update);
            return redirect()->route('subscription-cycle-list')->with('success','Subscription update successfully.');
        }
    }

    public function delete(Request $request)
    {
        $id = $request->subscription_id;
        Subscription::where('id',$id)->delete();
        return redirect()->route('subscription-cycle-list')->with('success','Subscription delete successfully.');
    }
}
