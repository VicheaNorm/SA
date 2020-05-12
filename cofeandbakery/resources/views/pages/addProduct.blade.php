@extends('layouts.dashboardlayout')

@section('content')
{{-- Content --}}
<div id="wrapper" style="width: 100%; margin-top: 70px; margin-left: 50px;">
    <div id="header" style="font-family: Ubuntu; background-color: #5B5B5B; height: 50px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
        <h3 style="padding: 10px; color: #ffffff;">ADD PRODUCTS</h3>
    </div>
    <div class="row" style="background-color: #CCCCCC; width: 100%; height: 600px;margin-left: 1px; padding-top: 20px;">
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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="width: 120px; height: 30px; padding:0px">Add</button>
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

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #2DFF69;">
            {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h2 style="font-family: ubuntu; color: aliceblue; padding: 0px;">Successful</h2>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

@endsection
