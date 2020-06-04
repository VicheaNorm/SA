<?php

namespace App\Http\Controllers;

use App\AddProduct;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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
    public function store(Request $request)
    {
        $addproduct = new AddProduct();

        $addproduct->productcode = $request->input('productcode');
        $addproduct->name = $request->input('name');
        $addproduct->category = $request->input('category');
        $addproduct->price = $request->input('price');
        $addproduct->date = $request->input('date');
        $addproduct->qty = $request->input('qty');
        $addproduct->cost = $request->input('cost');
        $addproduct->unit = $request->input('unit');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
            $file->move('uploads/addproduct/', $filename);
            $addproduct->image = $filename;
        }else{
            return $request;
            $addproduct->image = '';
        }

        $addproduct->save();
        Alert::success('Successful.', 'Done');

        return view('pages.addProduct')->with('pages.addproduct',$addproduct);
    }
    public function productDisplay()
    {
        $addproducts = AddProduct::all();
        return view('pages.product')->with('addproducts',$addproducts);
    }

    public function productEdit($id)
    {
        $addproducts = AddProduct::find($id);
        return view('pages.productupdate')->with('addproducts',$addproducts);
    }

    public function productUpdate(Request $request, $id)
    {
        $addproducts = AddProduct::find($id);

        $addproducts->productcode = $request->input('productcode');
        $addproducts->name = $request->input('name');
        $addproducts->category = $request->input('category');
        $addproducts->price = $request->input('price');
        $addproducts->date = $request->input('date');
        $addproducts->qty = $request->input('qty');
        $addproducts->cost = $request->input('cost');
        $addproducts->unit = $request->input('unit');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
            $file->move('uploads/addproduct/', $filename);
            $addproducts->image = $filename;
        }

        $addproducts->save();
        Alert::success('Update Successful.', 'Done');
        return redirect('product')->with('product',$addproducts);
        // return redirect('pages.addProduct')->with('pages.addproduct',$addproducts);
    }

    public function productDelete($id)
    {
        $addproducts = AddProduct::find($id);
        $addproducts->delete();
        Alert::success('Delete Successful.', 'Delete');
        return redirect('product')->with('product',$addproducts);
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
    public function expense()
    {
        $title = 'Expense Page';
        return view('pages.expense')->with('title', $title);
    }
    public function customer()
    {
        $title = 'Customer Page';
        return view('pages.customer')->with('title', $title);
    }
    public function stock()
    {
        $title = 'Stock Page';
        return view('pages.stock')->with('title', $title);
    }
    public function setupuser()
    {
        $title = 'Setup User Page';
        return view('pages.setupuser')->with('title', $title);
    }
    public function staff()
    {
        $title = 'Staff Page';
        return view('pages.staff')->with('title', $title);
    }
    public function userprofile()
    {
        $title = 'User Profile Page';
        return view('pages.userprofile')->with('title', $title);
    }
    public function supplier()
    {
        $title = 'Supplier Page';
        return view('pages.supplier')->with('title', $title);
    }
}
