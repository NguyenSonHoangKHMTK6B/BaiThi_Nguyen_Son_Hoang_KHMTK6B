<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointModel;
class AppointController extends Controller
{
    function getOrder() {
        $orders = AppointModel::all();
        return view('admin.order.getOrders', ['orders' => $orders]);
    }
}
