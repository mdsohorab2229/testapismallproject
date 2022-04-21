<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class CategoryController extends Controller
{
    public function index()
    {
        $data=Http::get('http://192.168.0.195:8001/api/category/list');
        $cat= $data->object();
        return view('fontend.category.index')->with('cat', $cat);
    }
}
