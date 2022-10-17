<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderShipmentController extends Controller
{
    public function get(Request $request)
    {
        // $name = $request->name
        // $email = $request->email
        // dd("hii");
        // $order = Order::findOrFail($request->order_id);

        // Ship the order...

        $name = "Mohamed";
        $mail = "meda3gm@gmail.com";
        $phone = "911";
        Mail::to("andreas-hein@gmail.com")->send(new OrderShipped($name,$mail, $phone));
    }
    //
}
