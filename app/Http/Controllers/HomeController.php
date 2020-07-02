<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orderinfo['orderno'] = '1008725.A'; 
        $orderinfo['email'] = 'jj@gmail.com';
        $orderinfo['customer'] = 'Jacob Johns';
        $orderinfo['phone'] = '02 6123 4545';
        $orderinfo['orderdate'] = 'Sat 23 Apr 2020';
        $orderinfo['mobile'] = '0412 345 345';
        return view('showstatus', $orderinfo);
    }
}
