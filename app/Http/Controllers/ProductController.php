<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Product::where('user_id',Auth::id())->get();
        return view('home.user_product',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('home.user_product_add',['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Product;
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->category_id=$request->input('category_id');
        $data->user_id= Auth::id();
        $data->price=$request->input('price');
        $data->detail=$request->input('detail');
        $data->area=$request->input('area');
        $data->location=$request->input('location');
        $data->bathroom=$request->input('bathroom');;
        $data->balcony=$request->input('balcony');
        $data->garden=$request->input('garden');
        $data->garage=$request->input('garage');
        $data->floor=$request->input('floor');
        $data->room=$request->input('room');
        $data->furnished=$request->input('furnished');
        $data->heating=$request->input('heating');
        $data->status=$request->input('status');
        if ($request->file('image')!=null){
            $data->image= Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('user_products')->with('success','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $data = Product::find($id);
        $datalist = Category::with('children')->get();
        return view('home.user_product_edit',['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data = Product::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->category_id=$request->input('category_id');
        $data->user_id= Auth::id();
        $data->price=$request->input('price');
        $data->detail=$request->input('detail');
        $data->area=$request->input('area');
        $data->location=$request->input('location');
        $data->bathroom=$request->input('bathroom');;
        $data->balcony=$request->input('balcony');
        $data->garden=$request->input('garden');
        $data->garage=$request->input('garage');
        $data->floor=$request->input('floor');
        $data->room=$request->input('room');
        $data->furnished=$request->input('furnished');
        $data->heating=$request->input('heating');
        $data->status=$request->input('status');
        if ($request->file('image')!=null){
            $data->image= Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('user_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        //DB::table('products')->where('id','=',$id)->delete();
        $data = Product::find($id);
        $data->delete();

        return redirect()->route('user_products');
    }
}
