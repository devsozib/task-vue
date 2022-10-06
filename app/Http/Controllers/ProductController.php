<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data  = $request->params['data'];
       $dataRules =[
        'name' => ['required'],
        'description'=>['required'],
        'price'=>['required','numeric'],
   ];
   $isError = false;
   $validator = Validator::make($data, $dataRules);
   if($validator->fails()) {
    $isError = true;
    return response()->json([
        'isError' => true,
        'errors'=>$validator->errors(),
        'error_type' => 'validation_error'
    ]);

 }else{

    $product = new Product;

    $product->name = $data['name'];
    $product->description = $data['description'];
    $product->price = $data['price'];
    $product->save();

    return response()->json([
        'isError' => false,
        'isSuccess' => "Product Added Successful",
    ]);
 }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  return $request;
         $id = $request->id;
         $name = $request->name;
         $description = $request->description;
         $price = $request->price;

         $product = Product::findOrFail($id);
         $product->name = $name;
         $product->description = $description;
         $product->price = $price;
         $product->update();
         return response()->json([
            'isError' => false,
            'isSuccess' => "Product update Successful",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // return $request;
        $id = $request->params['id'];
        // return $id;
        $product = Product::find($id);
        $product->delete();
        return response()->json([

            'isError' => false,
            'isSuccess' => "Product delete Successful",
        ]);
    }
}
