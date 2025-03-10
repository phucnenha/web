<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class BookController extends Controller{
    function laythongtintheloai()
    {
        
        $the_loai_sach = Category::all();
return view("qlsach.the_loai",compact("the_loai_sach"));

    }
    function laythongtinsach()
    {
    $sach = Book::where("nha_xuat_ban","Văn Học")->get();
    return view("qlsach.thong_tin_sach",compact("sach"));
    }
 function themtheloai()
 {
     return view('qlsach.form_them_sach');
 }  
 function luutheloai(Request $request)
 {
     $id =$request->input("id");
     $ten=$request->input("ten_the_loai");
     $data=[];
     foreach($id as $key=>$value)
     {
         $data[]= ["id"=>$value, "ten_the_loai"=>$ten[$key]];

     }
    BD::table("the_loai")->insert($data);
    echo"them thanh cong";
 }


}