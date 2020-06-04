<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProdcutController extends Controller
{
    public function addproduct()
    {
        $title = 'Add Products';
        return view('pages.addproduct')->with('title', $title);
    }
}
