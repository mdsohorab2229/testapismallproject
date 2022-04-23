<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AllProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $data= Http::get($this->base_urls['product']. 'product/show');
       $data1 = Http::get('http://192.168.0.195:8001/api/product/list');
       $data = $data1->object();
       return view('fontend.product.index')->with('data',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fontend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Http::post('http://192.168.0.195:8001/api/product/add', $request->all());
       return redirect('product/list');
    //    return view('fontend.product.index');

        // return response()->json('Data Add success fully');
        // return response()->json($res->object());
        // return $res->object();
        // dd($res->object());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $showData= Http::get('http://192.168.0.195:8001/api/product/show'.$id);
        dd($showData);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editProduct=Http::put('http://192.168.0.195:8001/api/product/update'.$id);
        $data=$editProduct->object();
        return view('fontend.product.edit')->with('data',$data);
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
        Http::put('http://192.168.0.195:8001/api/product/update'.$id .$request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        Http::delete('http://192.168.0.195:8001/api/product/delet/'.$id);
        return redirect('product/list');
    }
}
