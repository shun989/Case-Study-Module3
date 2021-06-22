<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $products = Product::all();
       return view('products.index',compact('products'));
    }


    public function showPageGuest()

    {
        $products = Product::all();
        if (!$this->userCan('view-page-guest')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));

        }
        return view('products.index',compact('products'));

    }


    public function showPageAdmin()

    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));

        }
        return redirect()->route('admin.index');

    }
}
