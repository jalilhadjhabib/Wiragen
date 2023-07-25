<?php

namespace App\Http\Controllers;
use App\Product as Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   { 
      return view('products'); 
   }

   public function search(Request $request)
   {
     
      if($request->ajax()){
   
        $output="";
        $products = Product::where('p_name','LIKE','%'.$request->search."%")->get();

        if($products){
     
           foreach ($products as  $product) {
           
            $output.='<tr>'.
            
            
            
            '<td>'.$product->p_name.'</td>'.

            '<td>'.$product->price.'</td>'.

            '<td>'.$product->p_color.'</td>'.
            
            '<td>'.$product->description.'</td>'.
            
            
            '</tr>';
        
           }
           return $output;  

        }
  
      }

   }

   
}