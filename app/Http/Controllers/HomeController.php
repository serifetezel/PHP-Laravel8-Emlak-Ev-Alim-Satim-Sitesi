<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id','title','image','price','detail','location','bathroom','room','description','area')->limit(5)->get();
        #print_r($slider);
        #exit();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'
        ];

        return view('home.index',$data);
    }

    public function home_detail($id)
    {
        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function category_homes($id)
    {
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_homes',['data'=>$data,'datalist'=>$datalist]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }


    public function properties()
    {
        return view('home');
    }
    public function agent()
    {
        return view('home');
    }
    public function blog()
    {
        return view('home');
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Mesajınız Kaydedildi. Teşekkür Ederiz.');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not ']);
        }
        else
        {
            return view('admin.login');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        //return view('admin.login');
        return redirect('/');
    }
}
