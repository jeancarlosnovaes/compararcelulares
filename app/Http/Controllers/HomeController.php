<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deals;
use App\Models\Tablet;
use App\Models\Smartphone;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tablets = Tablet::limit(5)->get();
        $smartphones = Smartphone::limit(5)->get();
        $deals = Deals::limit(5)->get();
            
        return view('home')->with( [ 'tablets' => $tablets, 'smartphones' => $smartphones, 'deals' => $deals ] );
    }
}
