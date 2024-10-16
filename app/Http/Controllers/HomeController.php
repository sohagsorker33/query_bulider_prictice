<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  function index()
  {
    //selection all rows
   // $result=DB::table('brands')->get();

  // selection by first row
   //$result=DB::table('brands')->first();

   // selection by find  row
  // $result=DB::table('brands')->find(3);

  // selecting specific single column
  //$result=DB::table('brands')->pluck('brandName');

  //row count
  //$result=DB::table('products')->count();

  // max(), min(), avg(), sum()
  //$result=DB::table('products')->sum('price');

    //selection specific multiple  column
   //$result=DB::table('products')->select('title','price')->get();

   //select unique
 // $result=DB::table('products')->select('title')->distinct()->get();

 // Inner Join
 /* $result=DB::table('products')
 ->join('categories','products.category_id', '=', 'categories.id')
 ->join('brands','products.brand_id', 'brands.id')
 ->get(); */


 //left join
/*  $result=DB::table('products')
 ->leftJoin('categories','products.category_id', '=', 'categories.id')
 ->leftJoin('brands','products.brand_id', 'brands.id')
 ->get(); */

 // right join
/*  $result=DB::table('products')
 ->rightJoin('categories','products.category_id', '=', 'categories.id')
 ->rightJoin('brands','products.brand_id', 'brands.id')
 ->get();
 */

 // cross join

/* $result=DB::table('products')
->crossJoin('categories')
->crossJoin('brands')
->get(); */

//simple pagination
// $result=DB::table('products')->simplePaginate(2);

//custom pagination
/*
$result=DB::table('products')->paginate(
 $parPage=2,
 $columns=['*'],
$pageName='items',
); */

$result =DB::table('products')
->skip(2)
->take(3)
->get();

return $result;

  }
}
