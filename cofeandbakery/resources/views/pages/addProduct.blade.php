@extends('layouts.dashboardlayout')

@section('content')
{{-- NavBar --}}
<div class="sidebar" data-color="white" data-active-color="danger" style="width:15%;">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small" style="width: 30px; height: 35px;">
                <img src="{{asset('admina/assets/img/1logo-small.png')}}">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal" style="font-size: 15px; font-weight: bold;color: #FF4720;">
            COFFEE GANG
        </a>
    </div>
    <div class="sidebar-wrapper" style="width:205px; font-family: ubuntu">
        <ul class="nav" style="margin-top: -10px;">
            <li style="margin-bottom: -10px;">
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p style="color:#1A5276; font-weight: 700;">Dashboard</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/order">
                    <i class="nc-icon nc-box"></i>
                    <p style="color:#1A5276; font-weight: 700;">CREATE ORDER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/customer">
                    <i class="nc-icon nc-single-02"></i>
                    <p style="color:#1A5276; font-weight: 700;">CUSTOMER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/product">
                    <i class="nc-icon nc-box-2"></i>
                    <p style="color:#1A5276; font-weight: 700;">PRODUCT</p>
                </a>
            </li>
            <li class="active "style="margin-bottom: -10px;">
                <a href="/addproduct">
                    <i class="nc-icon nc-bag-16"></i>
                    <p style="color:#FF4720; font-weight: 900;">ADD PRODUCT</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/stock">
                    <i class="nc-icon nc-shop"></i>
                    <p style="color:#1A5276; font-weight: 700;">STOCK</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/supplier">
                    <i class="nc-icon nc-paper"></i>
                    <p style="color:#1A5276; font-weight: 700;">SUPPLIER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="./user.html">
                    <i class="nc-icon nc-single-02"></i>
                    <p style="color:#1A5276; font-weight: 700;">User Profile</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/expense">
                    <i class="nc-icon nc-money-coins"></i>
                    <p style="color:#1A5276; font-weight: 700;">EXPENSE</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/setupuser">
                    <i class="nc-icon nc-simple-add"></i>
                    <p style="color:#1A5276; font-weight: 700;">SETUP USER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/staff">
                    <i class="nc-icon nc-circle-10"></i>
                    <p style="color:#1A5276; font-weight: 700;">STAFF</p>
                </a>
            </li>
            <li style="margin-top: 0px;">
                <a href="#">
                    <i class="nc-icon nc-cloud-upload-94"></i>
                    <p style="color:#E74C3C; font-weight: 700;">LOG OUT</p>
                </a>
            </li>
        </ul>
    </div>
</div>

{{-- Content --}}
<div id="wrapper" style="width: 100%; margin-top: 70px;">
    <div id="header" style="font-family: Ubuntu;">
        <h3>ADD PRODUCTS</h3>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form class="form-horizontal" action="">
                  <div class="form-group" style="margin-bottom: -10px;">
                    <label class="control-label col-sm-6" for="pcode" style="padding-top: 5px">Product Code:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="txtcode" placeholder="Enter Product Code" name="txtcode">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -10px">
                    <label class="control-label col-sm-6" for="pcode" style="padding-top: 5px">Product Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="txtcode" placeholder="Enter Product Code" name="txtcode">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -10px">
                    <label class="control-label col-sm-6" for="cate" style="padding-top: 5px">Categories:</label>
                    <select id="cars" style="margin-left: 15px; border-radius : 4px; width: 150px; height: 35px; ">
                        <option value="iced">Iced</option>
                        <option value="hot">Hot</option>
                        <option value="frapped">Frapped</option>
                        <option value="bakery">Bakery</option>
                    </select>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -10px">
                    <label class="control-label col-sm-6" for="pprice" style="padding-top: 5px">Product Price:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="txtprice" placeholder="Enter Product Price" name="txtprice">
                    </div>
                </div>
                <br><div class="form-group" style="margin-bottom: -10px">
                    <label class="control-label col-sm-6" for="date" style="padding-top: 5px">Date :</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="date" placeholder="" name="date">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -10px">
                    <label class="control-label col-sm-6" for="pqty" style="padding-top: 5px">Product QTY:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="txtqty" placeholder="Enter QTY " name="txtqty">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -10px">
                    <label class="control-label col-sm-6" for="pcost" style="padding-top: 5px">Product Cost:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="txtcost" placeholder="Enter Product Cost" name="txtcost">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -10px">
                    <label class="control-label col-sm-6" for="punit" style="padding-top: 5px">Unit:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="txtunit" placeholder="Enter Unit" name="txtunit">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -20px">
                    <label class="control-label col-sm-6" for="reorder" style="padding-top: 5px">Re-Order Unit:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="txtreorder" placeholder="" name="txtreorder">
                    </div>
                </div>
                <br>
                <div class="form-group" style="padding-left: 210px;">
                    <button type="button" class="btn btn-danger" style="width: 120px; height: 30px; padding:0px">Cancel</button>
                    <button type="button" class="btn btn-success" style="width: 120px; height: 30px; padding:0px">Add</button>
                </div>
        </div>
        <div class="col-sm-6">
            <div class="box-image" style="width: 256px; height: 256px; border: 1px solid #1f292e; border-radius: 5px; ">
                <img src="{{asset('img/noimage.png')}}" alt="">        
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-warning" style="margin-left: 50px; width: 150px; height: 35px; padding:0px;">Browse</button>
                <input type="file" class="form-control-file border">
            </div>
        </div>
        
     
        
    </div>
    

</div>

@endsection