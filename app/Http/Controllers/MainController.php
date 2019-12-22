<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index ()
    {
        return view('index');
    }
    /*                        Ч. 2        03:11*/
    public function categories ()
    {
        return view('categories');
    }

/*    public function product ($product)*/
    public function product ($product=null)         // 2   06:53
/*    public function product ()*/
    {
/*        dump($product);*/
/*        dd($product);*/
/*        dd(request());*/
/*        Переменную product можно передать несколькими спосабами
                            1-й*/
        return view('product', ['product'=>$product]);  // 2    05:45
    }

    public function category ($category) {       // 2   08:25
        dd($category);
    }


}
