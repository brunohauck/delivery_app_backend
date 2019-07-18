<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Menu;
use App\User;
use App\OrderMenu;
//use Carbon\Carbon;
class Orders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $request;

    public function __construct(Request $request) {
            $this->request = $request;
    }
    
  

    public function index()
    {
        //
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
        $user = new User();
        $user = $this->request->user();
    
        $cart = $request->all();
        $order = new Order();
        $order->customer_id = $user->id;
        $order->name = $user->name;
        $order->address = $cart['address'];
        $order->phone = $cart['phone'];
        $order->delivery_tax = $cart['delivery_tax'];
        $order->status = $cart['status'];
        $order->save();
        foreach($cart['ordermenus'] as $vars){
            $orderMenu = new OrderMenu();
            $orderMenu->order_id = $order->id;
            $orderMenu->menu_id = $vars['menu_id'];
            $orderMenu->quantity = $vars['quantity'];
            $orderMenu->save();
        }
        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
