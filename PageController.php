<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\product;
class PageController extends Controller
{
    public function getIndex(){
        $slide =slide::all();
        $new_product=product::where('new', 1)->get();
        $sanpham_khuyenmai=product::where('promotion_price','<>',0)->get();
        return view('page.trangchu', compact('slide', 'new_product','sanpham_khuyenmai'));
    }
   

}
