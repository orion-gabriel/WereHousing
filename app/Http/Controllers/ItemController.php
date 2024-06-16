<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller


{

    public function viewHome(){
        // view home\
        $products = Product::All();
        return view('main')->with('products', $products);
    }


    // public function viewPageSearch(Request $request){
    //     $products = Product::where('name', 'LIKE', "%$request->search%")->SimplePaginate(4);

    //     return view('main')->with('products', $products);
    // }

    // public function viewProductDetail($productId){
    //     $currProduct = DB::table('products')
    //     ->where('products.id', '=', $productId)
    //     ->first();
    //     return view('memberProductDetail', compact('currProduct'));
    // }

    // public function createProduct(){
    //     $products = DB::table('products')->get();
    //     return view('addItemPage', compact('products'));
    // }

    // public function insertProduct(Request $request){

    //     // Insert Items
    //     $image = $request->file('inputImage');
    //     $imageName = $image->getClientOriginalName();

    //     Storage::putFileAs('public/images/clothes/', $image, $imageName);
    //     $imagePath = $imageName;

    //     DB::table('products')->insert([
    //         'image' => $imagePath, //hanya path.
    //         'name' => $request->inputName,
    //         'description' => $request->inputDescription,
    //         'price' => $request->inputPrice,
    //         'stock' => $request->inputStock

    //     ]);
    //     return redirect('/a-home');

    // }

    // public function deleteProduct($productId){
    //     // DELETE ITEM
    //     DB::table('products')
    //     ->where('id', '=', $productId)
    //     ->delete();
    //     return redirect('/a-home');
    // }


}
