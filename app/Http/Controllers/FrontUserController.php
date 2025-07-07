<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\FrontUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class FrontUserController extends Controller
{
    public function __construct()
    {
       //$this->middleware('auth:front')->except(['show', 'front/user/login']);
    }
    public function index()
    {
        return view('front.user.create');
    }

    public function show()
    {
        return view('front.user.login');
    }

    public function store(Request $request )
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:front_users',
            'password' => 'required|min:7',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
        else
        {
            $user = new FrontUser();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Registration Successfull.'
            ]);
        }
    }

    public function frontUserLogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
        else
        {
            $credentials = $request->only('email', 'password');
            if (Auth::guard('front')->attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'page' => Session::get('page')
                ]);
            }
            else
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid email/password'
                ]);
            }
        }
    }

    public function profile()
    {
        $cart_items = Cart::content();
        $total = count($cart_items);
        if($total >= 1)
        {
            return view('front.cart',compact('cart_items'));
        }
        else
        {
            return view('front.user.profile');
        }

    }

    public function userLogout()
    {
        Auth::guard('front')->logout();
        return view('front.user.login');
        //dd(Auth::logout());
        // if($res)
        // {
        //     echo 'logout';exit;
        //     //return redirect()->route('front.login');
        // }
        // else
        // {
        //     echo 'adsssf';exit;
        // }


    }
}
