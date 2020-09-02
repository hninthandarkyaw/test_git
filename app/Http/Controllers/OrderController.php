<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function __construct($value=''){
        $this->middleware('role:Admin')->only('index','show');
        $this->middleware('role:Customer')->only('store');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $orders = Order::all();
       //dd($items);
        return view('backend.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // dd($request->notes);
        $cartArr = $request->itemArr; // arr
        
      // $cartArr = $myArr['item_list']; // if use array in localstorage

        $total = 0;
        foreach ($cartArr as $row) {
            $total+=($row['price'] * $row['qty']);
        }

        $order = new Order;
        $order->voucherno = uniqid(); // 8880598734
        $order->orderdate = date('Y-m-d');
        $order->user_id = Auth::id(); // auth id (1 => users table)
        $order->note = $request->notes;
        $order->total = $total;
        $order->save(); // only saved into order table

        // save into order_detail
        foreach ($cartArr as $row) {
            $order->items()->attach($row['id'],['qty'=>$row['qty']]);
        }

        return 'Successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        return view('backend.orders.orderdetail',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
