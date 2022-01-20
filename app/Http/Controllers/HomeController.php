<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
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

    public static function countreview($id)
    {
        return \App\Models\Review::where('home_id', $id)->count();
    }

    public static function avrgreview($id)
    {
        return \App\Models\Review::where('home_id', $id)->average('rate');
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id','title','image','price','detail','location','bathroom','room','description','area')->limit(5)->get();
        $popular = Product::select('id','title','image','price','detail','location','bathroom','room','description','area')->limit(3)->inRandomOrder()->get();
        $newest = Product::select('id','title','image','price','detail','location','bathroom','room','description','area','floor','furnished')->limit(6)->orderByDesc('id')->get();
        $picked = Product::select('id','title','image','price','detail','location','bathroom','room','description','area')->limit(3)->inRandomOrder()->get();
        $faq = Faq::select('question','answer')->limit(3)->inRandomOrder()->get();
        $user = User::select('name','email','phone','profile_photo_path','address')->limit(4)->inRandomOrder()->get();
        $review = \App\Models\Review::select('user_id','home_id','subject','review','rate','created_at')->limit(3)->inRandomOrder()->get();
        #print_r($newest);
        #exit();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'popular'=>$popular,
            'newest'=>$newest,
            'picked'=>$picked,
            'faq'=>$faq,
            'user'=>$user,
            'review'=>$review,
            'page'=>'home'
        ];
        return view('home.index',$data);
    }

    public function home_detail($id)
    {
        $data = Product::find($id);
        $datalist = Image::where('home_id',$id)->get();
        $reviews = \App\Models\Review::where('home_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.home_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function gethome(Request $request)
    {
        $search=$request->input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('home_detail',['id'=>$data->id]);
        }
        else{
            return redirect()->route('homelist',['search'=>$search]);
        }
    }

    public function homelist($search)
    {
        $datalist = Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_homes',['search'=>$search,'datalist'=>$datalist]);
    }

    public function allhome()
    {
        $datalist = Product::all();
        return view('home.all_homes',['datalist'=>$datalist]);
    }

    public function addtocart($id)
    {
        echo "Add to cart<br>";
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
        $datalist = Faq::all()->sortBy('position');
        return view('home.blog',['datalist'=>$datalist]);
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
