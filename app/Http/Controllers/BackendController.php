<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class BackendController extends Controller
{
    public function dashboardfun($value='')
    {
        
     return view('backend.dashboard');
    }
      public function createfun($value='')
    {
        
     return view('backend.items.create');
    }
     public function indexfun($value='')
    {
        
     return view('backend.items.index');
    }
      public function orderdetail($id)
    {
        $orderdetail = Order::find($id);

       return view('backend.orders.orderdetail',compact('orderdetail'));
     }
       public function orderlist($value='')
    {
        $orders = Order::all();

       return view('backend.orders.index',compact('orders'));
     }
}
