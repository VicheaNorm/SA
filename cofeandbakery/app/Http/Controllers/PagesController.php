<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $title = 'DASHBOARD';
        return view('pages.dashboard')->with('title', $title);
    }
    public function order()
    {
        $title = 'Create Order';
        return view('pages.order')->with('title', $title);
    }
    public function ui()
    {
        $title = 'Dashboard New';
        return view('pages.ui')->with('title', $title);
    }
    public function addproduct()
    {
        $title = 'Add Products';
        return view('pages.addproduct')->with('title', $title);
    }
    public function product()
    {
        $title = 'Product List';
        return view('pages.product')->with('title', $title);
    }
    public function user()
    {
        $title = 'User List';
        return view('pages.user')->with('title', $title);
    }
}
