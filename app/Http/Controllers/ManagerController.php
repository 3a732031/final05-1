<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Http\Requests\StoreManagerRequest;
use App\Http\Requests\UpdateManagerRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;
class ManagerController extends Controller
{

    public function index()
    {
        $products=Product::orderBy('id', 'ASC')->get();
        $data=['product'=>$products];
        return view('admin.product.index', $data);


    }


    public function create()
    {
        return view('admin.product.create');
    }


    public function store(Request $request)
    {
        $products=new Product();

        $products->id = $request->id;
        $products->name =$request->name;
        $products->ctg = $request->ctg;
        $products->price = $request->price;
        $products->invt = $request->invt;
        $products->color = $request->color;
        $products->image = $request->image;
        $products->status = $request->status;
        $products->save();

        return redirect()->route('admin.product.index');
    }


    public function show(Manager $manager)
    {
        //
    }


    public function edit($id)
    {
        $products=Product::find($id);
        $data=['products'=>$products];
        return view('admin.product.edit',$data);
    }


    public function update(Request $request,$id)
    {
        $products=Product::find($id);
        $products->update($request->all());
        return redirect()->route('admin.product.index');
    }


    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.product.index');
    }

}
