@extends('layouts.app')

@section('content')
    <div id="header" style="font-family: Ubuntu;">
        <h1>ADD PRODUCTS</h1>
    </div>
    <div id="box-left" style="float: left; width: 50%; margin-left: -90px;">
        <div class="container">
            <form class="form-horizontal" action="" >
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Code:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="txtcode" placeholder="Enter Product Code" name="txtcode">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Name:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="txtpname" placeholder="Input Product Name" name="txtpname">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Categories:</label>
                    <select id="cars" style="margin-left: 15px; border-radius : 4px; width: 150px; height: 35px; ">
                        <option value="iced">Iced</option>
                        <option value="hot">Hot</option>
                        <option value="frapped">Frapped</option>
                        <option value="bakery">Bakery</option>
                    </select>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Price:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="txtprice" placeholder="Enter Product Price" name="txtprice">
                    </div>
                </div>
                <br><div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Date :</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product QTY:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="txtqty" placeholder="Enter QTY " name="txtqty">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Cost:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="txtcost" placeholder="Enter Product Cost" name="txtcost">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Unit:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="txtunit" placeholder="Enter Unit" name="txtunit">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Re-Order Unit:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="txtreorder" placeholder="" name="txtreorder">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px; padding-left: 170px;">
                    <button type="button" class="btn btn-danger" style="width: 150px; height: 35px; padding:0px">Cancel</button>
                    <button type="button" class="btn btn-success" style="width: 150px; height: 35px; padding:0px">Add</button>
                </div>
            </form>
        </div>
    </div>
    <div id="box-right" style=" float: right; width: 300px;">

        <div class="container" style="width: 256px; height: 256px; border: 1px solid #1f292e; border-radius: 5px; margin-left: -430px">
            <img src="https://lh3.googleusercontent.com/proxy/l1iSyjCUefNqpTz2iUaIz90MoGjSASreRGvsKXvE8aFvuxEErSMmudWzO0xRfjMkmZ-B_BXJxdRD5A" alt="">
        </div>

    </div>
    <div class="form-group" style="margin-top: 270px;">
        <button type="button" class="btn btn-warning" style="width: 150px; height: 35px; padding:0px; margin-left: -15px;">Browse</button>
    </div>



    @endsection
