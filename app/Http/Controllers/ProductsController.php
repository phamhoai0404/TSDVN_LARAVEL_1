<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public  function index(){
        $titleName = "Đây là test truyền dữ liệu xuống view";
        $nameProduct = "Samsung";
        $myPhone = [
            'namePhone' => "Iphone 14",
            'year' => '2022'
        ];

        //Day la truyen du lieu bang compact truyen duoc nhieu
       // return view('products.index', compact('titleName', 'nameProduct', 'myPhone'));

        //Day la truyen du lieu bang with  thi chi truyen duoc 1
        //return view('products.index')->with('nameProduct', $nameProduct );


        //Đay la khong thuoc loai nao het va hay su dung nhat
        return view('products.index',[
            'myPhone' => $myPhone,
            'titleName' => $titleName
        ]);
    }

    // public function detail($productName){
    //     // $myPhone = [
    //     //     '1' => 'IPhone',
    //     //     '2' => 'Samsung',
    //     //     '3' => 'Oppo'
    //     // ];
    //     $name = $productName;
    //     return '';

    // }
    public function detail($productName){
        $myPhone = [
            '1' => 'IPhone',
            '2' => 'Samsung',
            '3' => 'Oppo'
        ];
        return view ('products.index',[
            'product' => $myPhone[$productName] ?? 'Unknow'
        ]);
    }

}
