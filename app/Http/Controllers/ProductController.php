<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\card;


class ProductController extends Controller
{
    //
   
    function index()
    { 
        $data=Products::all();
        return view('products',['products'=>$data]);
    }
    
    function detail($id)
    {
         $data=Products::find($id);
         return view('detail',['products'=>$data]);
    }

    function search(Request $req)
    {
        $data=Products::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    function addToCard(Request $req)
    {
        if($req->session()->has('user'))
        {
            $card=new card();
            $card->user_id=$req->session()->get('user')['id'];
            $card->product_id=$req->product_id;
            $card->save();
            
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }

     static function carditem()
    {
        return $count = card::count();
    }
 
}

